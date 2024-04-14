<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Library\SslCommerz\SslCommerzNotification;
use Illuminate\Support\Facades\Validator;

class SinglePackageViewController extends Controller
{
    public function packageview($id)
    {
        $packages = Package::with('transports', 'hotels')->get();

        $singlepackageview = Package::find($id);

        return view('Frontend.Pages.SinglePackageView.singlepackageview', compact('packages', 'singlepackageview'));
    }


    public function reservation($id)
    {
        $singlepackageview = Package::find($id);

        // dd($singlepackageview);

        return view('Frontend.Pages.Reservation.create', compact('singlepackageview'));
    }
    public function store(Request $request)
    {

        // dd($request->all());

        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|regex:/^01[3-9][0-9]{8}$/|numeric',
            'address' => 'required',
            'chooseroom' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif',
            'quantity' => 'required|numeric|gt:0',
        ]);

        if ($validation->fails()) {
            notify()->error($validation->getMessageBag());
            return redirect()->back();
        }

        $fileName = null;
        $path = null;

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = '/uploads/booking/';
            $file->move(public_path($path), $fileName);
        }

        $roomType = $request->chooseroom;
        $baseAmount = $request->price * $request->quantity;

        if ($roomType == "Single Bed for 2 persons in a room") {
            $amount = $baseAmount + 1000 * $request->quantity;
        } else {
            $amount = $baseAmount;
        }



       $booking= Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'address' => $request->address,
            'image' => $path . $fileName,
            'quantity' => $request->quantity,
            'chooseroom' => $roomType,
            'amount' => $amount,
            'transaction_id' => date('YmdHis'),
            'payment_status' => 'Pending',
            'code' => $request->id,
        ]);


        // dd($request->all());

      //start
    if (!$booking) {

        return redirect()->back()->with('error', 'Failed to create booking.');
    }


    if ($booking->payment_status === 'confirm') {

        $package = Package::where('id', $request->package_id)->first();


        if ($package) {

            $package->totalseat -= $request->quantity;
            $package->save();
        }
    }
    //end
        $this->payment($booking);
    }

    public function payment($booking)
    {


        $post_data = array();
        $post_data['total_amount'] = $booking->amount;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $booking->transaction_id;

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $booking->name;
        $post_data['cus_email'] = $booking->email;
        $post_data['cus_add1'] = $booking->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";



        $sslc = new SslCommerzNotification();

        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options))
         {
            print_r($payment_options);
            $payment_options = array();
        }
    }
}



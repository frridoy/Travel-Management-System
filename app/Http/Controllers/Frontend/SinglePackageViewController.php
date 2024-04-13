<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SinglePackageViewController extends Controller
{
    public function packageview($id)
    {
        $packages = Package::with('transports', 'hotels')->get();

        // dd($packages->all());

        $singlepackageview = Package::find($id);

        //  dd ($singlepackageview->hotel_id);

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



        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'address' => $request->address,
            'image' => $path . $fileName,
            'quantity' => $request->quantity,
            'chooseroom' => $roomType,
            'amount' => $amount,
        ]);

        // dd($request->all());

        notify()->success('Reservation form Submitted Successfully');
        return redirect()->back()->withInput();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function form()
    {
        return view('Admin.Customer.form');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'country' => 'required',
            'number' => 'required|numeric',

        ]);

// //for number
//         $customMessages = [
//             'number.regex' => 'Please enter a valid Bangladeshi phone number format (e.g., 017xxxxxxxx)',
//         ];
//         $validate->setCustomMessages($customMessages);

// //for email
//         $customMessages = [
//             'email.email' => 'Please enter a valid email address',
//         ];

//         $validate->setCustomMessages($customMessages);


        if ($validate->fails()) {
            notify()->error($validate->getMessageBag());

            return redirect()->back();
        }

        Customer::create([
            // left migration database column

            //right input feild name

            // shortcut:::: MI (Migration Input)

            'customer_name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'number' => $request->number,
            'country' => $request->country

        ]);
        notify()->success('Submitted Successfully');
        // return redirect()->route('customer.view');


        // echo "<pre>";
        // print_r($request->all());
    }

    public function view()
    {
        $customers = Customer::all();
        return view('Admin.Customer.view', compact('customers'));
    }

// delete


    public function delete ($id){
        $customer=Customer::find($id);
        // dd($customertt);
        if( $customer){
            $customer->delete();
        }
        return redirect()->route('customer.view');


    }

    //trash (tos show soft deleted data)

public function trash (){
    $customers=Customer::onlyTrashed()->get();
    $data= compact('customers');
    return view('Admin.Customer.Trash')->with($data);
}

//restore

public function restore($id){
    $customer=Customer::withTrashed()->find($id);
    // dd($customer);
    if($customer){
        $customer->restore();
    }
    return redirect()->route('customer.trash');
}

public function forceDelete($id){
    $customer=Customer::withTrashed()->find($id);
    if( $customer){
        $customer->forceDelete();
    }
    return redirect()->route('customer.trash');
}



    public function edit ($id)
    {
        $customers=Customer::find($id);
        // dd($customer);

        return view('Admin.Customer.edit', compact('customers'));

    }
    public function update (Request $request, $id)
    {
        $customers=Customer::find($id);
        if($customers)
        {
            $customers->update([
            'customer_name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'number' => $request->number,
            'country' => $request->country
            ]);
            // dd($customer);
            return redirect()->route('customer.view');
        }
    }

}




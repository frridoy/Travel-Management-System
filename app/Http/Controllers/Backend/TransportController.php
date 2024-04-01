<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransportController extends Controller
{
    public function create()
    {
        return view('Admin.Pages.Transport.create');
    }
    public function store(Request $request)
    {

        $validation=Validator::make($request->all(),
        [
            'name'=>'required',
            'type'=>'required',
            'price'=>'required|numeric|gt:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'number'=>'required|regex:/^01[3-9][0-9]{8}$/|numeric',

        ]);

        if($validation->fails())
        {
            // notify()->error($validation->errors()->first());
            notify()->error($validation->getMessageBag());
            return redirect()->back()->withInput();


        }

        Transport::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'price'=>$request->price,
            'image'=>$request->image,
            'number'=>$request->number,

        ]);

        notify()->success('Transport Info Created Succesfully');
        return redirect()->back();
    }

    public function list ()
    {
        $transports=Transport::all();
        return view('Admin.Pages.Transport.list', compact('transports'));
    }

}

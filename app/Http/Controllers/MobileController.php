<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use App\Models\Mobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MobileController extends Controller
{
    public function create()
    {

        $consumers = Consumer::all();
        return view('Admin.Mobile.form', compact('consumers'));
    }


    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'model' => 'required|string',
            'consumer_id' => 'required',
        ]);

        if ($validate->fails())
        {
            return redirect()->back();
        }


        Mobile::create([
            'model' => $request->model,
            'consumer_id' => $request->consumer_id,
        ]);


        return redirect()->route('mobile.list')->with('success', 'Mobile created successfully!');
    }


    public function list()
    {

        $mobiles = Mobile::with('consumer')->get();
        return view('Admin.Mobile.list', compact('mobiles'));
    }

}

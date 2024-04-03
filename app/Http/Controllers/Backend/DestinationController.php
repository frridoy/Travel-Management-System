<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DestinationController extends Controller
{
    public function create ()
    {
        return view('Admin.Pages.Destination.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validate=Validator::make($request->all(), [
             'name'=>'required',
             'distance'=>'nullable|numeric|gt:0'
        ]);

        Destination::create([

            'name'=>$request->name,
            'distance'=>$request->distance,

        ]);
          notify()->success('Destination Created succesfully');
          return redirect()->route('destination.create');
    }

    public function list ()
    {

        //pagination
        $destinations=Destination::paginate(4);

        return view('Admin.Pages.Destination.list', compact('destinations'));
    }
}



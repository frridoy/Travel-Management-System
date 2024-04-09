<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TransportController extends Controller
{
    public function create()
    {
        $destinations=Destination::all();
        return view('Admin.Pages.Transport.create',compact ('destinations'));
    }
    public function store(Request $request)
    {

        $validation=Validator::make($request->all(),
        [
            'name'=>'required',
            'type'=>'required',
            'destination_id' => 'required|exists:destinations,id',
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

        $path=null;
        $fileName=null;

        if($request->has('image'))
        {
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $fileName=time(). '.' .  $extention;
            $path='uploads/transport/';
            $file->move(public_path($path), $fileName);
        }

        Transport::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'destination_id'=>$request->destination_id,
            'price'=>$request->price,
            'image'=>$path . $fileName,
            'number'=>$request->number,

        ]);

        notify()->success('Transport Info Created Succesfully');
        return redirect()->back();
    }

    public function list ()
    {
        $transports = Transport::with('destinations')->get();
        return view('Admin.Pages.Transport.list', compact('transports'));
    }


    public function delete ($id)
    {
        $transport=Transport::find($id);
        if ( $transport)
        {
            $transport->delete();
        }
        notify()->success('Transport Info Trashed Succesfully');
        return redirect()->back();

    }

    public function trash()
    {
        $transports=Transport::onlyTrashed()->get();
        return view('Admin.Pages.Transport.trash', compact('transports'));
    }

    public function restore($id)
    {
        $transport=Transport::withTrashed()->find($id);
        {
            if($transport)
            {
                $transport->restore();
            }
            notify()->success('Transport Info Restored Succesfully');
            return redirect()->back();
        }
    }

    public function forceDelete($id)
    {
        $transport=Transport::withTrashed()->find($id);
        {
            if($transport)
            {
                $transport->forceDelete();
            }
            notify()->success('Transport Info Permanent Deleted Succesfully');
            return redirect()->back();
        }
    }

    public function edit ($id)
    {
        $transport=Transport::find($id);
        return view('Admin.Pages.Transport.edit', compact('transport'));
    }

 public function update(Request $request, $id)
 {
    $transport=Transport::find($id);
    if($transport)
    {
        if($request->has('image'))
        {
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $fileName=time(). '.' .  $extention;
            $path='uploads/transport/';
            $file->move(public_path($path), $fileName);

            //delete

            if($transport->image && File::exists(public_path($transport->image)))
            {
                File::delete(public_path($transport->image));
            }

            //update
            $transport->update([
               'image'=>$path . $fileName,
            ]);
        }


        $transport->update([
            'name'=>$request->name,
            'type'=>$request->type,
            'price'=>$request->price,
            'number'=>$request->number,
        ]);
    }
    notify()->success('Transport Info Updated Succesfully');
    return redirect()->route('transport.list');

 }

}



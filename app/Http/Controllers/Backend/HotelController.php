<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function create()
    {
        return view('Admin.Pages.Hotel.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

      $validation=Validator::make($request->all(),[
       'name'=>'required',
       'type'=>'required',
       'address'=>'required',
       'price' => 'required|numeric|gt:0',
       'number' => 'required|regex:/^01[3-9][0-9]{8}$/|numeric',
      ]);
      if ($validation->fails())
      {
        notify()->error($validation->getMessageBag());
        return redirect()->back();
      }

      Hotel::create([
        'name'=>$request->name,
        'type'=>$request->type,
        'address'=>$request->address,
        'price'=>$request->price,
        'number'=>$request->number,

      ]);
    //   dd($request->all());
      notify()->success('Hotel Created Succesfully');
      return redirect()->route('hotel.create');

    }
    public function list()
    {
        $hotels=Hotel::all();
        return view('Admin.Pages.Hotel.list',compact('hotels'));
    }


    public function delete($id)
    {
        $hotel=Hotel::find($id);

            if($hotel)
            {
                $hotel->delete();
            }
            notify()->error('Hotel Trashed Succesfully');
            return redirect()->back();

    }
    public function trash()
    {
        $hotels=Hotel::onlyTrashed()->get();
        return view('Admin.Pages.Hotel.trash', compact('hotels'));
    }

    public function restore($id)
    {
        $hotel=Hotel::withTrashed()->find($id);
        if($hotel)
        {
            $hotel->restore();
        }
        notify()->success('Hotel Restored Succesfully');
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $hotel=Hotel::withTrashed()->find($id);
        if($hotel)
        {
            $hotel->forceDelete();
        }
        notify()->error('Hotel Deleted Succesfully');
        return redirect()->back();

    }

}

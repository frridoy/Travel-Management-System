<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
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
      notify()->success('Hotel info Created Succesfully');
      return redirect()->route('hotel.create');

    }
    public function list()
    {

        $hotels=Hotel::paginate(2);
        // dd($hotels);
        return view('Admin.Pages.Hotel.list',compact('hotels'));
    }


    public function delete($id)
    {
        $hotel=Hotel::find($id);

            if($hotel)
            {
                $hotel->delete();
            }
            notify()->error('Hotel info Trashed Succesfully');
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
        notify()->success('Hotel info Restored Succesfully');
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $hotel=Hotel::withTrashed()->find($id);
        if($hotel)
        {
            $hotel->forceDelete();
        }
        notify()->error('Hotel info Deleted Succesfully');
        return redirect()->back();

    }

    public function edit($id)
    {
        $hotel=Hotel::find($id);
        return view('Admin.Pages.Hotel.edit',compact('hotel'));
    }

    public function update(Request $request, $id)
    {
$hotel=Hotel::find($id);
if ($hotel)
{
    $hotel->update([
        'name'=>$request->name,
        'type'=>$request->type,
        'address'=>$request->address,
        'price'=>$request->price,
        'number'=>$request->number,
    ]);
}
notify()->success('Hotel info Updated Succesfully');
return redirect()->route('hotel.list');
    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
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

        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'address' => 'required',
            'singlebedprice' => 'required|numeric|gt:0',
            'doublebedprice' => 'required|numeric|gt:0',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif',
            'number' => 'required|regex:/^01[3-9][0-9]{8}$/|numeric',
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
            $path = '/uploads/hotel/';
            $file->move(public_path($path), $fileName);
        }

        Hotel::create([
            'name' => $request->name,
            'type' => $request->type,
            'address' => $request->address,
            'singlebedprice' => $request->singlebedprice,
            'doublebedprice' => $request->doublebedprice,
            'number' => $request->number,
            'image' => $path . $fileName,


        ]);

        //   dd($request->all());
        notify()->success('Hotel info Created Succesfully');
        return redirect()->route('hotel.create');
    }
    public function list()
    {

        $hotels = Hotel::paginate(4);
        // dd($hotels);
        return view('Admin.Pages.Hotel.list', compact('hotels'));
    }


    public function delete($id)
    {
        $hotel = Hotel::find($id);

        if ($hotel) {
            $hotel->delete();
        }
        notify()->error('Hotel info Trashed Succesfully');
        return redirect()->back();
    }
    public function trash()
    {
        $hotels = Hotel::onlyTrashed()->get();
        return view('Admin.Pages.Hotel.trash', compact('hotels'));
    }

    public function restore($id)
    {
        $hotel = Hotel::withTrashed()->find($id);
        if ($hotel) {
            $hotel->restore();
        }
        notify()->success('Hotel info Restored Succesfully');
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $hotel = Hotel::withTrashed()->find($id);
        if ($hotel) {
            $hotel->forceDelete();
        }
        notify()->error('Hotel info Deleted Succesfully');
        return redirect()->back();
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('Admin.Pages.Hotel.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        if ($hotel) {

            //check new image want to upload/reupload

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $path = '/uploads/hotel/';
                $file->move(public_path($path), $fileName);



                // Delete old image if it exists

                if ($hotel->image && File::exists(public_path($hotel->image)))
                {
                    File::delete(public_path($hotel->image));
                }


                //update
                $hotel->update([
                    'image' => $path . $fileName,
                ]);
            }

            $hotel->update([
                'name' => $request->name,
                'type' => $request->type,
                'address' => $request->address,
                'singlebedprice' => $request->singlebedprice,
                'doublebedprice' => $request->doublebedprice,
                'number' => $request->number,
            ]);
        }
        notify()->success('Hotel info Updated Succesfully');
        return redirect()->route('hotel.list');
    }
}

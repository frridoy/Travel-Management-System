<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Stringable;
// use Illuminate\Support\Str;


class PackageController extends Controller
{
    public function create()
    {
        $hotels = Hotel::all();
        $transports = Transport::with('destinations')->get();
        return view('Admin.Pages.Package.create', compact('hotels', 'transports'));
    }
    public function store(Request $request)
    {

        // dd($request->all());
        // print_r($request->all());

        $validation = Validator::make($request->all(), [
            'startingpoint' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'pickupdate' => 'required|date|after_or_equal:today',
            'returndate' => 'required|date|after_or_equal:pickupdate',
            'duration' => 'required|string|max:255',
            'totalseat' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
            'spot' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hotel_id' => 'required|exists:hotels,id',
            'transport_id' => 'required|exists:transports,id',


        ]);


        if ($validation->fails()) {

            notify()->error($validation->getMessageBag());
            return redirect()->back()->withInput();
        }

        //  // Initialize $filename variable
        //   $filename = '';

        // // Initialize $path variable
        //   $path = '';


        $path = null;
        $filename = null;

        if ($request->has('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            // $filename = Str::uuid()->toString() . '_' . time() . '_' . rand(1000, 9999) . '.' . $extension;
            $path = 'uploads/package/';
            $file->move(public_path($path), $filename);

        }

        Package::create([
            'startingpoint' => $request->startingpoint,
            'destination' => $request->destination,
            'pickupdate' => $request->pickupdate,
            'duration' => $request->duration,
            'returndate' => $request->returndate,
            'totalseat' => $request->totalseat,
            'price' => $request->price,
            'spot' => $request->spot,
            'description' => $request->description,
            'image' => $path . $filename,
            'hotel_id' => $request->hotel_id,
            'transport_id' => $request->transport_id,

        ]);

        // dd($request->all());
        notify()->success('Package Created Sucessfully.');
        return redirect()->route('package.create');
    }

    public function list()
    {
        $packages = Package::with('hotels', 'transports')->get();
        return view('Admin.Pages.Package.list', compact('packages'));
    }

    public function delete($id)
    {
        $package = Package::find($id);
        if ($package) {
            $package->delete();
        }
        notify()->error('Pacakge Trashed Succesfully');
        return redirect()->back();
    }
    public function trash()
    {
        $packages = Package::onlyTrashed()->get();
        return view('Admin.Pages.Package.trash', compact('packages'));
    }
    public function restore($id)
    {
        $package = Package::withTrashed()->find($id);
        if ($package) {
            $package->restore();
        }
        notify()->success('Pacakge Restored Succesfully');
        return redirect()->back();
    }
    public function forceDelete($id)
    {
        $package = Package::withTrashed()->find($id);
        if ($package) {
            $package->forceDelete();
        }
        notify()->error('Pacakge Deleted Succesfully');
        return redirect()->back();
    }

    public function edit($id)
    {

        $package = Package::find($id);

        abort_if(is_null ($package), 404);

        return view('Admin.Pages.Package.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $package = Package::find($id);

        if ($package)
         {
            // Check if a new image is uploaded
            if ($request->hasFile('image'))
             {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = 'uploads/package/';
                $file->move(public_path($path), $filename);

                // // Delete old image if it exists
                // if (File::exists($package->image))
                // {
                //     File::delete($package->image);
                // }

                if ($package->image && File::exists(public_path($package->image))) {
                    File::delete(public_path($package->image));
                }

                // Update image field
                $package->update([
                        'image' => $path . $filename,
                    ]);
            }


            $package->update([
                'startingpoint' => $request->startingpoint,
                'destination' => $request->destination,
                'pickupdate' => $request->pickupdate,
                'duration' => $request->duration,
                'returndate' => $request->returndate,
                'totalseat' => $request->totalseat,
                'price' => $request->price,
                'spot' => $request->spot,
                'description' => $request->description,

            ]);
            notify()->success('Package Info Updated Successfully');
            return redirect()->route('package.list');
        }
    }
}

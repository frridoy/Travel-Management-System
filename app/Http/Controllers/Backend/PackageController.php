<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function create()
    {
        $hotels=Hotel::all();
        return view('Admin.Pages.Package.create',compact('hotels'));
    }
    public function store(Request $request)
    {

        // dd($request->all());
        // print_r($request->all());

        $validation=Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'pickupdate' => 'required|',
            'duration' => 'required|string|max:255',
            'returndate' => 'required|',
            'totalseat' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
            'spot' => 'required|string|max:255',
            'description' => 'nullable|string',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hotel_id' => 'required|exists:hotels,id',
        ]);


        if ($validation->fails())
        {

            notify()->error($validation->getMessageBag());
            return redirect()->back()->withInput();
        }

        // $fileName=null;
        // if($request->hasFile('image'))
        // {
        //     $file=$request->file('image');
        //     $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
        //     $file->storeAs('/uploads',$fileName);

        // }

        Package::create([
            'name' => $request->name,
            'pickupdate' => $request->pickupdate,
            'duration' => $request->duration,
            'returndate' => $request->returndate,
            'totalseat' => $request->totalseat,
            'price' => $request->price,
            'spot' => $request->spot,
            'description' => $request->description,
            // 'image' => $fileName,
            'hotel_id' => $request->hotel_id,

        ]);

        // dd($request->all());
        notify()->success('Package Created Sucessfully.');
        return redirect()->route('package.create');
    }
//     public function store(Request $request)
// {
//     $validation = Validator::make($request->all(), [

//         'name' => 'required',
//         'pickupdate' => 'required',
//         'duration' => 'required',
//         'returndate' => 'required',
//         'totalseat' => 'required',
//         'price' => 'required',
//         'spot' => 'required',
//         // 'description' => 'nullable|string',
//         // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//         'hotel_id' => 'required',
//     ]);

//     if ($validation->fails()) {
//         notify()->error($validation->getMessageBag());
//         return redirect()->back()->withInput();
//     }

//     // $fileName = null;

//     // if ($request->hasFile('image')) {
//     //     $file = $request->file('image');
//     //     $fileName = time() . '_' . $file->getClientOriginalName(); // Appending timestamp to ensure unique file names
//     //     $file->storeAs('uploads', $fileName); // Storing file in 'uploads' directory
//     // }

//     Package::create([
//         'name' => $request->name,
//         'pickupdate' => $request->pickupdate,
//         'duration' => $request->duration,
//         'returndate' => $request->returndate,
//         'totalseat' => $request->totalseat,
//         'price' => $request->price,
//         'spot' => $request->spot,
//         'description' => $request->description,
//         // 'image' => $fileName, // Saving file name in database
//         'hotel_id' => $request->hotel_id,
//     ]);

//     notify()->success('Package Created Successfully.');
//     return redirect()->route('package.create');
// }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\Extension\DescriptionList\Event\LooseDescriptionHandler;

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

    public function delete($id)
    {
        $destionation=Destination::find($id);
        if( $destionation)
        {
            $destionation->delete();
        }
        notify()->error('Destination Info Trashed Successfuly');
        return redirect()->back();
    }

    public function trash()
    {
        $destinations=Destination::onlyTrashed()->get();
        return view('Admin.Pages.Destination.trash', compact('destinations'));
    }

    public function restore($id)
    {
        $destination=Destination::withTrashed()->find($id);
        if($destination)
        {
            $destination->restore();
        }
        notify()->success('Destination Info Restored Successfuly');
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $destination=Destination::withTrashed()->find($id);
        if($destination)
        {
            $destination->forceDelete();
        }
        notify()->error('Destination Info Deleted Successfuly');
        return redirect()->back();
    }
}



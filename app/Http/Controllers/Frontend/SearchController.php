<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search (Request $request)
    {
        if($request->search)
        {
            $packages=Package::where('destination','LIKE','%'.$request->search.'%')->orwhere('startingpoint','LIKE','%'.$request->search.'%')->orwhere('pickupdate','LIKE','%'.$request->search.'%')  ->get();

        }
        else
        {
            $packages=Package::all();
        }
        return view('Frontend.pages.search', compact('packages'));
    }
}


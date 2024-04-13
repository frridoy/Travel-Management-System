<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class SinglePackageViewController extends Controller
{
    public function packageview($id)
    {
        $packages=Package::with('transports', 'hotels')->get();

        // dd($packages->all());

        $singlepackageview= Package::find($id);

        //  dd ($singlepackageview->hotel_id);

        return view('Frontend.Pages.SinglePackageView.singlepackageview', compact('packages', 'singlepackageview'));
    }

   public function reservation($id)
   {
    $singlepackageview= Package::find($id);

    // dd($singlepackageview);

    return view('Frontend.Pages.Reservation.create', compact('singlepackageview'));
   }

public function store(Request $request)
{
    dd($request->all());
}

}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class OurPackageController extends Controller
{
    public function ourpackages()
    {
        $packages = Package::all();
        return view('Frontend.Pages.packages', compact('packages'));
    }
}

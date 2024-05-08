<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $packages=Package::all();
        $bookings=Booking::all();

        return view('Frontend.Layouts.homeDashboard',compact('packages', 'bookings'));
    }
}

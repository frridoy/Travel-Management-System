<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        $bookings=Booking::all();
        return view('Admin.Pages.Booking.list', compact('bookings'));
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function dashboard()
   {

    // $countTourist=User::where('role', 'tourist')->get();
    $countPackage=Package::all();
    $countConfirmBooking =Booking::where('payment_status', 'confirm')
                            // ->where('status', '!=', 'cancelled')
                            ->where('status', 'Pending')
                            ->count();
    $countPendingBooking =Booking::where('payment_status', 'Pending')
                            ->count();
    $countCancelBooking =Booking::where('refund_processed', 1)
                            ->count();


    return view('Admin.Layouts.dashboard', compact('countPackage', 'countConfirmBooking', 'countPendingBooking', 'countCancelBooking'));
   }
}

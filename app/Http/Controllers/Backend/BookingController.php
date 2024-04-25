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

      public function refund($id)
       {
        // Find the booking by ID
        $booking = Booking::find($id);

        // Check if the booking exists
        if (!$booking) {
            return back()->with('error', 'Booking not found.');
        }

        // Update the booking status to 'refunded' and final amount to 80% of payment amount
        $booking->status = 'canceled';
        $booking->refund_processed = true;
        $booking->final_amount = $booking->amount * 0.2;
        $booking->save();

        return back()->with('success', 'Refund processed successfully.');
    }

    public function search(Request $request)
    {
        $bookings = Booking::query();

        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $bookings->where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('id', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('transaction_id', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('payment_status', 'LIKE', '%' . $searchTerm . '%');
            });
        }
        $bookings = $bookings->get();
        return view('Admin.Pages.Booking.search', compact('bookings'));
    }

}

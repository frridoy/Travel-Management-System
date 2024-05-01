<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TouristController extends Controller
{
    public function registration (){
        return view('Frontend.Pages.Tourist.registration');
    }
    public function store(Request $request)
    {
        // dd($request->all());

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'tourist',
            'password'=>bcrypt($request->password),
        ]);

        // dd($request->all());
        // notify()->success('Registration successful.');
        return redirect()->route('tourist.login');
    }


    public function login()
    {
        return view('Frontend.Pages.Tourist.login');
    }


    public function doLogin(Request $request){

        $val=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);

        if($val->fails())
        {
            // notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->attempt($credentials))
        {
            // notify()->success('Login Success.');
            return redirect()->route('home');
        }

        // notify()->error('Invalid Credentials.');
            return redirect()->back();


    }


    public function logout()
    {
        auth()->logout();
        // notify()->success('Logout Success.');
        return redirect()->route('home');
    }

    //my booking
    public function touristBooking($id)
    {
        $bookings=Booking::where('tourist_id', $id)->get();
        return view('Frontend.Pages.Tourist.mybooking', compact('bookings'));
    }


    public function cancel($id)
    {
        // Find the booking by ID
        $booking = Booking::find($id);

        // Check if the booking exists
        if (!$booking)
        {
            return back()->with('error', 'Booking not found.');
        }

        // Update the booking status to 'canceled'
        $booking->status = 'canceled';
        $booking->save();

        return back()->with('success', 'Booking canceled successfully.');
    }


    public function profile(){
        $userdata=Booking::where('tourist_id',auth()->user()->id)->get();

        return view('Frontend.Pages.Tourist.profile',compact('userdata'));
    }

    public function view($id)
    {
        $booking=Booking::find($id);
        return view('Frontend.Pages.Tourist.bookingView',compact('booking'));
    }

}

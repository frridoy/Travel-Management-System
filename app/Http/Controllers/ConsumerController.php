<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    // public function showMobile()
    // {
    //     $mobiles = Mobile::with('consumer')->get();
    //     return view('Admin.show', compact('mobiles'));
    // }
    public function createConsumer()
    {
        return view('Admin.Consumer.form');
    }

    public function storeConsumer(Request $request)
{
    // Validate incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
    ]);

    // Create a new consumer
    Consumer::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
    ]);

    // Dump and die to inspect request data
    // dd($request->all());

    // Redirect back or to any other page after saving
    return redirect()->route('list.consumer')->with('success', 'Consumer created successfully!');
}
    public function listConsumer()
    {

        $consumers = Consumer::all();
        return view('Admin.Consumer.list', compact('consumers'));
    }
//     public function listConsumer()
// {
//     $consumers = Consumer::with('mobiles')->get();
//     return view('Admin.Consumer.list', compact('consumers'));
// }
}

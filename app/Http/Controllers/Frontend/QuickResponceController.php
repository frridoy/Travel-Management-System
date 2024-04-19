<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuickResponceController extends Controller
{
    public function index()
    {
        $questions = [
            [
                'question' => 'What are your opening hours?',
                'answer' => 'We are open from 9am to 12pm, Saturday to Friday.'
            ],

            [
                'question' => 'Do you offer packages?',
                'answer' => 'Yes, we offer packages.'
            ],
            [
                'question' => 'There is a any hidden charge?',
                'answer' => 'No, There will no hidden charge except your personal cost'
            ],
            [
                'question' => 'After payment I want to cancle the booking?',
                'answer' => 'Yes, You can but 24 hours before the pick up date. Then you will get the refaund of 80% of the money from your total  payable amount. Thank you'
            ],
           
        ];

        return view('Frontend.Pages.Responce.quick', compact('questions'));
    }
}

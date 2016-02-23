<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class HomeController extends Controller
{

    public function index()
    {
        return view()->make("home.index");
    }


    public function send()
    {
        Log::info("Email sending without Queues started");
        Mail::send('email.welcome', ['data'=>'data'], function ($message) {

            $message->from('nwambachristian@gmail.com', 'Christian Nwmaba');

            $message->to('nwambachristian@gmail.com');

        });
        Log::info("Email sending without Queues finished");
    }


}

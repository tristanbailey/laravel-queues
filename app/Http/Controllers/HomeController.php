<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmail;
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
        Log::info("Request Cycle with Queues Begins");
        $this->dispatch((new SendWelcomeEmail())->delay(60 * 5));
        Log::info("Request Cycle with Queues Ends");
    }


}

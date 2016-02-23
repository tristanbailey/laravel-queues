<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;

class SendWelcomeEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('email.welcome', ['data'=>'data'], function ($message) {

            $message->from('nwambachristian@gmail.com', 'Christian Nwmaba');

            $message->to('nwambachristian@gmail.com');

        });
    }
}

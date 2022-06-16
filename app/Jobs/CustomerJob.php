<?php

namespace App\Jobs;

use App\Jobs\CustomerJob;
use App\Mail\Sendmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class CustomerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $email;
    protected $name;
    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct($email, $name)
    {
        //
        $this->email = $email;
        $this->name = $name;
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //

        Mail::to($this->email['email'])->send(new Sendmail($this->name['name']));
    }
}

<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use Illuminate\Queue\SerializesModels;

class ContactJob implements ShouldQueue
{
    protected $id , $email , $type;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct($id , $email , $type)
    {
        $this->id = $id;    
        $this->email = $email;
        $this->type = $type;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $email_html = new ContactMail($this->id,$this->type);
        Mail::to($this->email)->send($email_html);
    }
}

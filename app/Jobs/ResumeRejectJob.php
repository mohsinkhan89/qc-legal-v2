<?php

namespace App\Jobs;

use App\Mail\ResumeRejectMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ResumeRejectJob implements ShouldQueue
{
    protected $id , $email;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct($id , $email)
    {
        $this->id = $id;
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $email_html = new ResumeRejectMail($this->id);
        Mail::to($this->email)->send($email_html);
    }
}

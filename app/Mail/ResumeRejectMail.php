<?php

namespace App\Mail;

use App\Candidate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResumeRejectMail extends Mailable
{
    protected $id;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function build()
    {
        $application = Candidate::find($this->id);
        $Subject = "Your application for " . $application->career_detail->title . " has been rejected";
        $EmailPath = 'frontend.emails.reject-job';

        return $this->subject($Subject)->from('donotreply@qclegal.com','QC Legal')->view($EmailPath, compact('application'));
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

<?php

namespace App\Mail;

use App\Candidate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResumeMail extends Mailable
{
    protected $id , $type;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($id,$type)
    {
        $this->id = $id;
        $this->type = $type;
    }
    /**
     * Get the message envelope.
     */
    public function build()
    {
        $application = Candidate::find($this->id);
        if($this->type == "applicant"){
            $Subject = "Thank you! " . $application->first_name . ' ' . $application->last_name . " for applying for the role " . $application->career_detail->title. " at QC Legal.";
            $EmailPath = 'frontend.emails.job';
        }
        else if($this->type == "admin"){
            $Subject = $application->first_name . ' ' . $application->last_name . " applied for " . $application->career_detail->title . " job.";
            $EmailPath = 'frontend.emails.job';
        }

        $type = $this->type;
        return $this->subject($Subject)->from('no-reply@qclegal.com','QC Legal')->view($EmailPath, compact('application','type'));
    }
}

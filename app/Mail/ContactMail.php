<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Contact;

class ContactMail extends Mailable
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
        $contact = Contact::find($this->id);
        if($this->type == "customer"){
            $Subject = "Thank you! " . $contact->first_name . ' ' . $contact->last_name . " for contacting us at QC Legal.";
            $EmailPath = 'frontend.emails.contact';
        }
        else if($this->type == "admin"){
            $Subject = $contact->first_name . " " . $contact->last_name . " enquiry recieved.";
            $EmailPath = 'frontend.emails.contact';
        }
        
        $type = $this->type;
        return $this->subject($Subject)->from('info@qclegal.com','QC Legal')->view($EmailPath, compact('contact','type'));
    }
}

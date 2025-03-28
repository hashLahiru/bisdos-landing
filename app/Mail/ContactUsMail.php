<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $recipientType;


    public function __construct($data, $recipientType)
    {
        $this->data = $data;
        $this->recipientType = $recipientType;
    }

    public function build()
    {
        $subject = $this->recipientType == 'user' ? 'Thank you for Contact us!' : 'New Contact Us Request Recieved';

        return $this->subject($subject)->view('emails.contactus');
    }
}

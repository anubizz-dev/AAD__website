<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public $firstname,
        public $lastname,
        public $email,
        public $inquiryMessage
       )
       {}
    
    public function build(){
        return $this->text('emails.inquiry');
    }
}

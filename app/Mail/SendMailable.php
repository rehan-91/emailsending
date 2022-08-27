<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $email_template;
    public $from_address;
    public $from_name;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
        public function __construct($subject, $email_template, $from_address, $from_name)
    {
        $this->subject = $subject;
        $this->email_template = $email_template;
        $this->from_address = $from_address;
        $this->from_name = $from_name;
     
    }

    /**
     * Build the message.
     *
     * @return $this
     */
   
      public function build()
    {
        
        return $this->view('email.email_template')->from( $this->from_address, $this->from_name)->subject( $this->subject );
    }
}

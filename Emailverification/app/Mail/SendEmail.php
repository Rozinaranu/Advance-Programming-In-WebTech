<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $body;
    public $subject;
    public function __construct($e_body,$e_subject)
    {
        //
        $this->body = $e_body;
        $this->subject = $e_subject;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mail.Template')
                          ->with('body',$this->body)
                          ->subject($this->subject);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email;
    public $mes;
    public function __construct($email)
    {
      $this->email = $email;
      $this->mes = 'Please Verify your Account';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_email = $this->email;
        $user_id = get_user_id($e_email);
        $data = array(
            'email'=> $user_id
        );
        return $this->view('custom.mails.welcome_email')->with('data',$data);
    }
}

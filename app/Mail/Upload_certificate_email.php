<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Upload_certificate_email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $file_names;
    public $mentor_name;

    public function __construct($mentor_name, $file_names)
    {
        $this->mentor_name= $mentor_name;
        $this->file_names = $file_names;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        $file_name = $this->file_names;
        $mentor = $this->mentor_name;

        $data = array(
            "file_names" => $file_name,
            "mentor_name" =>$mentor
        );

        return $this->view('custom.mails.upload_certificate_email')->with('data',$data);
    }
}

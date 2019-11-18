<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProjectCreatedEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public $project_name;
    public $project_desc;

    public function __construct($email,$project_name,$project_desc)
    {
        $this->email = $email;
        $this->project_name = $project_name;
        $this->project_desc = $project_desc;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_email = $this->email;
        $project_name = $this->project_name;
        $project_desc = $this->project_desc;

        $data = array(
            "email" => $e_email,
            "project_name" => $project_name,
            "project_desc" => $project_desc
        );

        return $this->view('custom.mails.project_created_email')->with('data',$data);
    }
}

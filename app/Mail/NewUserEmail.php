<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public $name;
    public $lastname;
    public $city;
    public $background_field_of_study;

    public function __construct($email, $name, $lastname, $city, $background_field_of_study)
    {
        $this->email = $email;
        $this->name  = $name;
        $this->lastname = $lastname;
        $this->city = $city;
        $this->background_field_of_study = $background_field_of_study;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $Email = $this->email;
        $name = $this->name;
        $lastname = $this->lastname;
        $city = $this->city;
        $background_field_of_study = $this->background_field_of_study;

        $data = array(
            "email" => $Email,
            "name" => $name,
            "lastname" => $lastname,
            "city" => $city,
            "background_field_of_study"=> $background_field_of_study
        );


        return $this->view('custom.mails.new_user_email')->with('data',$data);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Enquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phonenumber;
    public $messageText;

    public function __construct($name, $phonenumber, $email, $messageText){
        $this->name = $name;
        $this->email = $email;
        $this->phonenumber = $phonenumber;
        $this->messageText = $messageText;
    }

    public function build()
    {
        return $this->view('emails.uzklausa')->with([
            'name' => $this->name,
            'email' => $this->email,
            'phonenumber' => $this->phonenumber,
            'message' => $this->messageText,
        ]);
    }
}

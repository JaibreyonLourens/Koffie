<?php

namespace App\Mail;

use http\Client\Curl\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param $supplynames
     */
    public function __construct($user)
    {

        $this->user = $user;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        dd($this->user);
        return $this->markdown('mail.order.succesfull')->with('user', $this->user);
    }
}

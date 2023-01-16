<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $rq;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($rq)
    {
        $this->rq = $rq;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Formulario de contacto: ' .$this->rq->get('subject'))->view('emails.contact');
    }
}

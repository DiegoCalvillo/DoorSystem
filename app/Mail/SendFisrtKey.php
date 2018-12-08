<?php

namespace DoorSystem\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendFisrtKey extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $persona;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario, $persona)
    {
        $this->usuario = $usuario;
        $this->persona = $persona;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.enviar_primer_key');
    }
}

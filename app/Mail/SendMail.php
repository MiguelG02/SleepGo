<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Reserva;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public $preco;

    public $codigo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $preco, $codigo)
    {
        $this->details = $details;
        $this->preco = $preco;
        $this->codigo = $codigo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('NapBox, Sleep&Go')->view('emails.email');
    }
}

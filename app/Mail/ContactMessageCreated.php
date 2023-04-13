<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\sms;
use Illuminate\Queue\SerializesModels;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    // declaration des variables publiques
    
    public $sms;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(sms $sms)
    {
        // Affectation des différentes valeurs
        $this->sms = $sms;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->sms->email, $this->sms->nom .' '. $this->sms->prenom)
                    ->markdown('emails.meassages.created');
    }
}

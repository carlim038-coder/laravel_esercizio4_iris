<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // Dichiariamo le variabili pubbliche per i dati del form (evitiamo $message perché è una parola riservata)
    public $username, $useremail, $usermessage;

    // Crea una nuova istanza del messaggio
    public function __construct($name, $mail, $message)
    {
        $this->username = $name;
        $this->useremail = $mail;
        $this->usermessage = $message;
    }

    // Ottiene la busta (envelope) del messaggio
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Grazie di averci contattato',
            from: new Address('jeffrey@example.com', 'Jeffrey Way'), // Mittente personalizzato
        );
    }

    // Ottiene la definizione del contenuto del messaggio
    public function content(): Content
    {
        return new Content(
            view: 'email',
        );
    }

    // Ottiene gli allegati per il messaggio
    public function attachments(): array
    {
        return [];
    }
}
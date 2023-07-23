<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;


class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome, $email, $age, $allergie, $textArea, $primaImg, $secondaImg, $budget, $city, $appointment;


    /**
     * Create a new message instance.
     */
    public function __construct($nome, $email, $age, $allergie, $textArea, $primaImg, $secondaImg, $budget, $city, $appointment) //sono parametri formali
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->age = $age;
        $this->allergie = $allergie;
        $this->textArea = $textArea;
        $this->primaImg = $primaImg;
        $this->secondaImg = $secondaImg;

        $this->budget = $budget;
        $this->city = $city;
        $this->appointment = $appointment;

        $this->from($this->email);
    }

    public function build()
    {
        return $this->view('mail/contactMail')
                    ->attachData(file_get_contents($this->primaImg), 'primaImg.jpg', [
                        'mime' => 'image/jpeg',
                    ])
                    ->attachData(file_get_contents($this->secondaImg), 'secondaImg.jpg', [
                        'mime' => 'image/jpeg',
                    ]);
    }



    



    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail from mancus',
            from: new Address($this->email)
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail/contactMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

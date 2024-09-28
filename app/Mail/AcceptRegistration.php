<?php

namespace App\Mail;

use App\Models\Registrasi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AcceptRegistration extends Mailable
{
    use Queueable, SerializesModels;
    protected $registrasi;

    /**
     * Create a new message instance.
     */
    public function __construct($kode)
    {
        $this->registrasi = Registrasi::where('token_registrasi', $kode)->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $detail = $this->registrasi;
        return $this->subject('Pendaftar Diterima - The Next Turbo')
        ->view('view.accept', compact('detail'));
    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Accept Registration',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}

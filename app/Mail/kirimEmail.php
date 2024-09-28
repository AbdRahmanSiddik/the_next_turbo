<?php

namespace App\Mail;

use App\Models\Registrasi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class kirimEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $token_email;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->token_email = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $detail = Registrasi::where('token_registrasi', $this->token_email)->first();
        return $this->subject('Berhasil Mendaftar - The Next Turbo')
        ->view('view.name', compact('detail'));
    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Pendaftaran Berhasil - The Next Turbo',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     $details = Registrasi::where('token_registrasi', $this->token_email)->first();
    //     return new Content(
    //         view: 'view.name',
    //         data: [
    //             'detail' => $details
    //         ]
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

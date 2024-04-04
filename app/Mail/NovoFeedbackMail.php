<?php

namespace App\Mail;

use App\Models\FeedbackUsuario;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NovoFeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $motivo_contato;
    public $mensagem;
    public $email_contato;
    public $telefone;
    public $user_id;
    // public $url;

   

    /**
     * Create a new message instance.
     */
    public function __construct(FeedbackUsuario $feedbackuser)
    {
        $this->user_id = $feedbackuser->user_id;
        $this->email_contato = $feedbackuser->email_contato;
        $this->telefone = $feedbackuser->telefone;
        $this->mensagem = $feedbackuser->mensagem;
        $this->motivo_contato = $feedbackuser->motivos->motivo;

        // $this->url = 'http://localhost:8000/faleconosco/'.$tarefa->id;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Seu Contato Foi Registrado',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.novo-feedback',
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

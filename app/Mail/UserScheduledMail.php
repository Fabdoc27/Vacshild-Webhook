<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserScheduledMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public User $user, public string $scheduledDate)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Vaccination Scheduled',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.user-scheduled-notify',
            with: [
                'user' => $this->user,
                'scheduledDate' => $this->scheduledDate,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendAccountReferrerConfirmationEmail extends Mailable implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    /**
     * Create a new message instance.
     */
    public function __construct(array $details) {
        $this->details = $details;
        $this->afterCommit();
    }

    /**
     * Get the message envelope.
    */
    public function envelope(): Envelope {
        return new Envelope(
            [
                'from' => [
                    'address' => env('MAIL_FROM_ADDRESS', 'support@primesglobe.com'),
                    'name' => env('MAIL_FROM_NAME', 'Primesglobe'),
            ],
        ],
            subject: 'A new user registered an account through your affliate link',
        );
    }

    /**
     * Get the message content definition.
    */
    public function content(): Content {
        return new Content(
            view: 'emails.registration.referrer_confirmation',
            with: [
                'username' => $this->verification->username,
                'firstname' => $this->verification->firstname,
            ],
        );
    }

    /**
     * Execute the job.
     */
    public function handle(): void {
        sleep(5);
        logger('Referrer notified through email!');
    }
}

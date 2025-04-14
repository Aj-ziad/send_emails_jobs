<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    /**
     * Create a new message instance.
     *
     * @param string $name The name of the sender (e.g., "Hassan Ferdani")
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Job Application from ' . $this->name,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.job_application', // New Blade view for the job application email
            with: [
                'name' => $this->name,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
            // Attach a PDF file (e.g., your resume)
            Attachment::fromPath(storage_path('app/public/ziyad_ajdour.pdf'))
                ->as('Ziyad_Ajdour_Resume.pdf')
                ->withMime('application/pdf'),

            // // Attach a Word document (e.g., a cover letter)
            // Attachment::fromPath(storage_path('app/public/cover_letter.docx'))
            //     ->as('Ziyad_Ajdour_Cover_Letter.docx')
            //     ->withMime('application/vnd.openxmlformats-officedocument.wordprocessingml.document'),

            // // Attach a CSV file (e.g., a list of references)
            // Attachment::fromPath(storage_path('app/public/references.csv'))
            //     ->as('Ziyad_Ajdour_References.csv')
            //     ->withMime('text/csv'),
        ];
    }
}
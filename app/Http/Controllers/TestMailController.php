<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function testMailF()
    {
        try {
            // Define an array of recipient email addresses (company emails)
            $recipients = [
                'ziadorange33@gmail.com', // Replace with actual company email addresses
               
                // Add as many email addresses as needed
            ];

            // Sender's name
            $senderName = 'Ziyad Ajdour';

            // Send the email to all recipients
            Mail::to($recipients)
                ->send(new TestMail($senderName));

            return 'Mail sent successfully to all recipients';
        } catch (\Exception $e) {
            return 'Failed to send mail: ' . $e->getMessage();
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|min:8|max:255',
            'email' => 'required|email|min:8|max:255',
            'phone' => 'nullable|string|min:10|max:20',
            'message' => 'required|string|min:25|max:255',
        ]);

        // Prepare email data
        $emailData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'userMessage' => $request->input('message'), // Renamed to avoid conflicts
        ];

        // Send email using a Blade view
        Mail::send('emails.contact', $emailData, function ($mail) use ($request) {
            $mail->to('wecare@homewardboundadirondacks.org')
                ->subject('New Contact Form Submission')
                ->replyTo($request->email); // Reply to the sender's email
        });

        // Redirect back with success message
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'w3lName' => 'required|string',
                'w3lSender' => 'required|email',
                'w3lSubject' => 'required|string',
                'w3lWebsite' => 'required|url',
                'w3lMessage' => 'required|string',
            ]);

            $message = Message::create([
                'name' => $validatedData['w3lName'],
                'email' => $validatedData['w3lSender'],
                'subject' => $validatedData['w3lSubject'],
                'website_url' => $validatedData['w3lWebsite'],
                'message' => $validatedData['w3lMessage'],
            ]);

            Session::flash('success', 'Thank you for the form submission. An admin will reach out soon.');

            return redirect()->back();

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Error sending message. Please try again later.']);
        }
    }
}

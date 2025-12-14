<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'required|email|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000'
        ]);

        Message::create($validated);

        return view('message_confirmation');
    }
}

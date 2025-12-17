<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        if (!session('is_admin')) {
            return redirect()->route('admin.login');
        }

        $messages = Message::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.user_msg', compact('messages'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $adminUser = env('ADMIN_USER', 'ricknova');
        $adminPassword = env('ADMIN_PASSWORD', 'changeme');

        if ($validated['username'] === $adminUser && $validated['password'] === $adminPassword) {
            session(['is_admin' => true]);
            return redirect()->route('admin.messages')->with('success', 'Logged in successfully');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully');
    }
}

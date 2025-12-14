@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
    <div class="container mx-auto px-6 py-20">
        <div class="max-w-md mx-auto bg-gray-50 rounded-lg p-8 border-2 border-electric">
            <h1 class="text-3xl font-bold text-center mb-8 text-darkgray">Admin Login</h1>

            @if($errors->any())
                <div class="bg-red-100 border-2 border-red-500 text-red-700 px-4 py-3 rounded mb-6">
                    <p class="font-semibold">Login Failed</p>
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="username" class="block font-semibold text-darkgray mb-2">Username</label>
                    <input type="text" id="username" name="username" required autofocus
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-electric transition">
                </div>

                <div>
                    <label for="password" class="block font-semibold text-darkgray mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-electric transition">
                </div>

                <button type="submit"
                    class="w-full px-4 py-2 bg-linear-to-r from-electric to-neonpurple text-white rounded-lg font-semibold hover:shadow-lg transition-all">
                    Login
                </button>
            </form>

            <p class="text-center text-gray-600 text-sm mt-6">
                Use your admin credentials to access the messages dashboard.
            </p>
        </div>
    </div>
@endsection

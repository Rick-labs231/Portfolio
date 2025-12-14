@extends('layouts.app')

@section('title', 'Message Confirmed')

@section('content')
    <div class="container mx-auto px-6 py-20">
        <div class="max-w-2xl mx-auto text-center bg-green-50 border-2 border-green-500 rounded-lg p-12">
            <div class="mb-4 text-6xl">✓</div>
            <h1 class="text-4xl font-bold text-green-600 mb-4">Message Received!</h1>
            <p class="text-xl text-gray-700 mb-6">
                Thank you for reaching out to Ricknova. Your message has been received, and we'll get back to you shortly.
            </p>
            <p class="text-gray-600 mb-8">
                We appreciate your interest and will respond as soon as possible.
            </p>
            <a href="{{ route('home') }}"
                class="inline-block px-8 py-3 bg-linear-to-r from-electric to-neonpurple text-white rounded-lg font-semibold hover:shadow-lg transition-all">
                Back to Home
            </a>
        </div>
    </div>
@endsection

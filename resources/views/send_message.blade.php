@extends('layouts.app')

@section('title', 'Send a Message')

@section('content')
    <div class="container mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold mb-8 bg-linear-to-r from-electric to-neonpurple bg-clip-text text-transparent">
            Send a Message
        </h1>

        <div class="max-w-2xl">
            <p class="text-gray-700 mb-8">
                Have a question or project in mind? Fill out the form below and I'll get back to you shortly.
            </p>

            <form action="{{ route('contact.send') }}" method="POST" class="bg-gray-50 rounded-lg p-8 space-y-6">
                @csrf

                <div>
                    <label for="name" class="block font-semibold text-darkgray mb-2">Full Name <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2 border-2 {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:border-electric transition">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="phone" class="block font-semibold text-darkgray mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                        class="w-full px-4 py-2 border-2 {{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:border-electric transition">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block font-semibold text-darkgray mb-2">Email <span
                            class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 border-2 {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:border-electric transition">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="service" class="block font-semibold text-darkgray mb-2">Type of Inquiry / Service
                        Interest</label>
                    <select id="service" name="service"
                        class="w-full px-4 py-2 border-2 {{ $errors->has('service') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:border-electric transition">
                        <option value="">— Select a service —</option>
                        <option value="Full-Stack Web Development" {{ old('service') == 'Full-Stack Web Development' ? 'selected' : '' }}>Full-Stack Web Development</option>
                        <option value="Front-End Development" {{ old('service') == 'Front-End Development' ? 'selected' : '' }}>Front-End Development</option>
                        <option value="Back-End Development" {{ old('service') == 'Back-End Development' ? 'selected' : '' }}>
                            Back-End Development</option>
                        <option value="UI/UX Design" {{ old('service') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design
                        </option>
                        <option value="Python Development" {{ old('service') == 'Python Development' ? 'selected' : '' }}>
                            Python Development</option>
                        <option value="Project Consultation" {{ old('service') == 'Project Consultation' ? 'selected' : '' }}>
                            Project Consultation</option>
                        <option value="Other" {{ old('service') == 'Other' ? 'selected' : '' }}>Other Inquiry</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="block font-semibold text-darkgray mb-2">Message <span
                            class="text-red-500">*</span></label>
                    <textarea id="message" name="message" rows="6" required
                        class="w-full px-4 py-2 border-2 {{ $errors->has('message') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:border-electric transition">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full px-8 py-3 bg-linear-to-r from-electric to-neonpurple text-white rounded-lg font-semibold hover:shadow-lg hover:scale-105 transition-all">
                    Send Message
                </button>
            </form>
        </div>
    </div>
@endsection

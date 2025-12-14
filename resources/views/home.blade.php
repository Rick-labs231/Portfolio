@extends('layouts.app')

@section('title', 'Welcome to Ricknova')

@section('content')
    <div class="container mx-auto px-6 py-20">
        {{-- Hero Section --}}
        <section class="text-center mb-20">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-linear-to-r from-electric to-neonpurple bg-clip-text text-transparent inline-block max-w-max"
                style="animation: typewriter 8s steps(18) infinite, blink 0.7s step-end infinite alternate; overflow: hidden; white-space: nowrap; border-right: 3px solid; border-image: linear-gradient(to bottom, #00d4ff, #d946ef) 1; padding-right: 2px;">
                Welcome to Ricknova
            </h1>
            <style>
                @keyframes typewriter {
                    0% {
                        width: 0;
                    }

                    50% {
                        width: 100%;
                    }

                    100% {
                        width: 0;
                    }
                }

                @keyframes blink {
                    from {
                        border-right-color: rgba(0, 212, 255, 0.8);
                    }

                    to {
                        border-right-color: transparent;
                    }
                }
            </style>
            <p class="text-2xl text-gray-700 mb-2">Crafting digital experiences that shine</p>
            <p class="text-lg text-gray-600 mb-8">Building the digital version of you…</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="{{route('services')}}"
                    class="px-8 py-3 bg-linear-to-r from-electric to-neonpurple text-white rounded-lg font-semibold hover:shadow-lg hover:scale-105 transition-all">
                    My services
                </a>
                <a href="{{ route('send.message') }}"
                    class="px-8 py-3 border-2 border-electric text-electric rounded-lg font-semibold hover:bg-electric hover:text-white transition-all">
                    Send a Message
                </a>
            </div>
        </section>

        {{-- Intro Section --}}
        <section class="max-w-3xl mx-auto mb-20 bg-gray-50 rounded-xl p-8">
            <h2 class="text-3xl font-bold mb-4 text-darkgray">Introduction</h2>
            <p class="text-gray-700 leading-relaxed">
                Ricknova is the personal portfolio of Odinga Eric, a passionate developer and tech enthusiast. Here, code
                meets creativity to deliver modern, responsive, and functional web solutions. From small projects to
                full-stack web applications, every project reflects a blend of skill, innovation, and clean design.
            </p>
        </section>

        {{-- Featured Services --}}
        <section class="mb-20">
            <h2 class="text-3xl font-bold mb-10 text-center text-darkgray">Featured Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="p-6 border-2 border-electric rounded-lg hover:shadow-lg hover:bg-blue-50 hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="font-bold text-lg mb-2 text-electric">Full-Stack Web Development</h3>
                    <p class="text-gray-600">Build complete web applications with responsive design, interactive UI, and
                        server-side functionality.</p>
                </div>
                <div
                    class="p-6 border-2 border-neonpurple rounded-lg hover:shadow-lg hover:bg-purple-50 hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="font-bold text-lg mb-2 text-neonpurple">Front-End Development</h3>
                    <p class="text-gray-600">Craft visually appealing, interactive websites using HTML, CSS, JavaScript, and
                        modern frameworks.</p>
                </div>
                <div
                    class="p-6 border-2 border-electric rounded-lg hover:shadow-lg hover:bg-blue-50 hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="font-bold text-lg mb-2 text-electric">Back-End Development</h3>
                    <p class="text-gray-600">Database integration, server-side logic, and API development for seamless
                        functionality.</p>
                </div>
                <div
                    class="p-6 border-2 border-neonpurple rounded-lg hover:shadow-lg hover:bg-purple-50 hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="font-bold text-lg mb-2 text-neonpurple">UI/UX Design</h3>
                    <p class="text-gray-600">Design user interfaces that are modern, intuitive, and easy to navigate.</p>
                </div>
                <div
                    class="p-6 border-2 border-electric rounded-lg hover:shadow-lg hover:bg-blue-50 hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="font-bold text-lg mb-2 text-electric">Python Development</h3>
                    <p class="text-gray-600">Scripts, automation, and small to medium applications using Python.</p>
                </div>
                <div
                    class="p-6 border-2 border-neonpurple rounded-lg hover:shadow-lg hover:bg-purple-50 hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="font-bold text-lg mb-2 text-neonpurple">Project Consultation</h3>
                    <p class="text-gray-600">Technical advice, planning, and optimization for web projects.</p>
                </div>
            </div>
        </section>

        {{-- Testimonials Section --}}
        <section class="max-w-6xl mx-auto mb-20">
            <h2 class="text-3xl font-bold mb-10 text-center text-darkgray">Testimonials</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <blockquote
                    class="p-6 border-l-4 border-electric bg-gray-50 rounded-r-lg shadow-lg hover:shadow-xl transition-shadow"
                    style="animation: floatUp 4s ease-in-out infinite;">
                    <p class="text-gray-700 italic mb-4">"Ricknova built a website for me that's both sleek and highly
                        functional."</p>
                    <p class="text-sm font-semibold text-gray-600">— Client</p>
                </blockquote>
                <blockquote
                    class="p-6 border-l-4 border-neonpurple bg-gray-50 rounded-r-lg shadow-lg hover:shadow-xl transition-shadow"
                    style="animation: floatDown 4s ease-in-out infinite;">
                    <p class="text-gray-700 italic mb-4">"His code is clean, fast, and future-proof."</p>
                    <p class="text-sm font-semibold text-gray-600">— Client</p>
                </blockquote>
                <blockquote
                    class="p-6 border-l-4 border-electric bg-gray-50 rounded-r-lg shadow-lg hover:shadow-xl transition-shadow"
                    style="animation: floatUp 4s ease-in-out infinite; animation-delay: 0.5s;">
                    <p class="text-gray-700 italic mb-4">"Professional, reliable, and creative — highly recommended!"</p>
                    <p class="text-sm font-semibold text-gray-600">— Client</p>
                </blockquote>
                <blockquote
                    class="p-6 border-l-4 border-neonpurple bg-gray-50 rounded-r-lg shadow-lg hover:shadow-xl transition-shadow"
                    style="animation: floatDown 4s ease-in-out infinite; animation-delay: 0.5s;">
                    <p class="text-gray-700 italic mb-4">"The UI design is stunning and incredibly intuitive. Every pixel is
                        perfectly placed."</p>
                    <p class="text-sm font-semibold text-gray-600">— Client</p>
                </blockquote>
                <blockquote
                    class="p-6 border-l-4 border-electric bg-gray-50 rounded-r-lg shadow-lg hover:shadow-xl transition-shadow"
                    style="animation: floatUp 4s ease-in-out infinite; animation-delay: 1s;">
                    <p class="text-gray-700 italic mb-4">"The backend infrastructure he built is rock-solid. It scales
                        beautifully and handles everything flawlessly."</p>
                    <p class="text-sm font-semibold text-gray-600">— Client</p>
                </blockquote>
                <blockquote
                    class="p-6 border-l-4 border-neonpurple bg-gray-50 rounded-r-lg shadow-lg hover:shadow-xl transition-shadow"
                    style="animation: floatDown 4s ease-in-out infinite; animation-delay: 1s;">
                    <p class="text-gray-700 italic mb-4">"Amazing UI design paired with robust backend development. A
                        complete package!"</p>
                    <p class="text-sm font-semibold text-gray-600">— Client</p>
                </blockquote>
            </div>
            <style>
                @keyframes floatUp {

                    0%,
                    100% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-15px);
                    }
                }

                @keyframes floatDown {

                    0%,
                    100% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(15px);
                    }
                }
            </style>
        </section>
        </section>
    </div>
@endsection
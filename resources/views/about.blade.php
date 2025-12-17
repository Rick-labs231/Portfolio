@extends('layouts.app')

@section('title', 'About Ricknova')

@section('content')
    <div class="container mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold mb-8 bg-linear-to-r from-electric to-neonpurple bg-clip-text text-transparent inline-block max-w-max"
            style="animation: typewriter 8s steps(14) infinite, blink 0.7s step-end infinite alternate; overflow: hidden; white-space: nowrap; border-right: 3px solid; border-image: linear-gradient(to bottom, #00d4ff, #d946ef) 1; padding-right: 2px;">
            About Ricknova
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            {{-- Left side: Text content --}}
            <div class="text-left">
                <section class="mb-12">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Ricknova is the online brand of Odinga Eric, a dedicated and innovative developer passionate about
                        creating elegant, functional, and scalable web applications. With a strong background in Python, web
                        technologies, and creative problem solving, Ricknova delivers projects that exceed expectations
                        while
                        keeping usability and aesthetics at the forefront.
                    </p>
                </section>

                <section class="mb-12 bg-blue-50 p-8 rounded-lg">
                    <h2 class="text-2xl font-bold mb-3 text-darkgray">Mission</h2>
                    <p class="text-gray-700 text-lg">
                        To transform ideas into digital realities, empowering individuals and businesses through modern
                        technology.
                    </p>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold mb-6 text-darkgray">Profile</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-semibold text-electric mb-2">Name</h3>
                            <p class="text-gray-700">Odinga Eric ("Ricknova")</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-neonpurple mb-2">Role</h3>
                            <p class="text-gray-700">Founder & Lead Developer</p>
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-darkgray mt-8 mb-3">Bio</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Ricknova is a skilled developer and tech enthusiast with experience in Python, Laravel, and
                        front-end
                        frameworks. Known for methodical coding, attention to detail, and a creative approach to
                        problem-solving, Ricknova turns concepts into clean, responsive, and engaging digital experiences.
                    </p>
                </section>
            </div>

            {{-- Right side: Photo --}}
            <div class="flex justify-end">
                <img src="{{ route('assets.Photoricknova.jpg') }}" alt="Ricknova - Odinga Eric"
                    class="w-full max-w-xs h-80 rounded-lg object-cover shadow-lg">
            </div>
        </div>
    </div>
    </div>
@endsection
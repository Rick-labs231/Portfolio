@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold mb-8 bg-linear-to-r from-electric to-neonpurple bg-clip-text text-transparent inline-block max-w-max"
            style="animation: typewriter 8s steps(11) infinite, blink 0.7s step-end infinite alternate; overflow: hidden; white-space: nowrap; border-right: 3px solid; border-image: linear-gradient(to bottom, #00d4ff, #d946ef) 1; padding-right: 2px;">
            Get In Touch
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

        <div class="max-w-3xl">
            <section class="mb-12 bg-gray-50 rounded-lg p-8">
                <h2 class="text-2xl font-bold mb-6 text-darkgray">Contact Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-semibold text-electric mb-2 text-lg">WhatsApp</h3>
                        <a href="https://wa.me/2348154411519" target="_blank"
                            class="text-gray-700 hover:text-neonpurple transition">
                            +234 815 441 1519
                        </a>
                    </div>
                    <div>
                        <h3 class="font-semibold text-neonpurple mb-2 text-lg">Email</h3>
                        <a href="mailto:odingaeric293@gmail.com" class="text-gray-700 hover:text-electric transition">
                            odingaeric293@gmail.com
                        </a>
                    </div>
                    <div>
                        <h3 class="font-semibold text-electric mb-2 text-lg">GitHub</h3>
                        <a href="https://github.com/Ricklabs-231" target="_blank"
                            class="text-gray-700 hover:text-neonpurple transition">
                            Ricklabs-231
                        </a>
                    </div>
                    <div>
                        <h3 class="font-semibold text-neonpurple mb-2 text-lg">Quick Connect</h3>
                        <p class="text-gray-700">Use the WhatsApp button for instant messaging</p>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-6 text-darkgray">Message Section</h2>
                <p class="text-gray-700 mb-8">
                    Reach out for collaborations, inquiries, or project requests. I'm always interested in hearing about new
                    projects and creative ideas.
                </p>
                <a href="{{ route('send.message') }}"
                    class="inline-block px-8 py-3 bg-linear-to-r from-electric to-neonpurple text-white rounded-lg font-semibold hover:shadow-lg hover:scale-105 transition-all">
                    Send Your Message
                </a>
            </section>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="container mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold mb-8 bg-linear-to-r from-electric to-neonpurple bg-clip-text text-transparent inline-block max-w-max"
            style="animation: typewriter 8s steps(8) infinite, blink 0.7s step-end infinite alternate; overflow: hidden; white-space: nowrap; border-right: 3px solid; border-image: linear-gradient(to bottom, #00d4ff, #d946ef) 1; padding-right: 2px;">
            Services
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

        <section class="mb-20">
            <p class="text-xl text-gray-700 mb-12">
                Comprehensive web development solutions tailored to your needs. Custom pricing based on project scope.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div
                    class="border-2 border-electric rounded-lg p-8 hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-2xl font-bold text-electric mb-3">1. Full-Stack Web Development</h3>
                    <p class="text-gray-700 mb-3">
                        Build complete web applications with responsive design, interactive UI, and server-side
                        functionality.
                    </p>
                    <p class="text-sm text-gray-600 font-semibold">Price/Project Info: Custom, depending on scope</p>
                </div>

                <div
                    class="border-2 border-neonpurple rounded-lg p-8 hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-2xl font-bold text-neonpurple mb-3">2. Front-End Development</h3>
                    <p class="text-gray-700 mb-3">
                        Craft visually appealing, interactive websites using HTML, CSS, JavaScript, and frameworks.
                    </p>
                    <p class="text-sm text-gray-600 font-semibold">Price/Project Info: Custom</p>
                </div>

                <div
                    class="border-2 border-electric rounded-lg p-8 hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-2xl font-bold text-electric mb-3">3. Back-End Development</h3>
                    <p class="text-gray-700 mb-3">
                        Database integration, server-side logic, and API development for seamless functionality.
                    </p>
                    <p class="text-sm text-gray-600 font-semibold">Price/Project Info: Custom</p>
                </div>

                <div
                    class="border-2 border-neonpurple rounded-lg p-8 hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-2xl font-bold text-neonpurple mb-3">4. UI/UX Design</h3>
                    <p class="text-gray-700 mb-3">
                        Design user interfaces that are modern, intuitive, and easy to navigate.
                    </p>
                    <p class="text-sm text-gray-600 font-semibold">Price/Project Info: Custom</p>
                </div>

                <div
                    class="border-2 border-electric rounded-lg p-8 hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-2xl font-bold text-electric mb-3">5. Python Development</h3>
                    <p class="text-gray-700 mb-3">
                        Scripts, automation, and small to medium applications using Python.
                    </p>
                    <p class="text-sm text-gray-600 font-semibold">Price/Project Info: Custom</p>
                </div>

                <div
                    class="border-2 border-neonpurple rounded-lg p-8 hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-2xl font-bold text-neonpurple mb-3">6. Project Consultation</h3>
                    <p class="text-gray-700 mb-3">
                        Technical advice, planning, and optimization for web projects.
                    </p>
                    <p class="text-sm text-gray-600 font-semibold">Price/Project Info: Custom</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-3xl font-bold mb-8 text-darkgray">Completed Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-gray-50 rounded-lg p-8 border-l-4 border-electric hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold mb-2 text-darkgray">Progi's Touch Web App</h3>
                    <p class="text-gray-700">A beauty business web platform with admin dashboard and booking system.</p>
                </div>

                <div
                    class="bg-gray-50 rounded-lg p-8 border-l-4 border-neonpurple hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold mb-2 text-darkgray">Portfolio Website</h3>
                    <p class="text-gray-700">Clean, responsive personal portfolio site.</p>
                </div>

                <div
                    class="bg-gray-50 rounded-lg p-8 border-l-4 border-electric hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold mb-2 text-darkgray">More Projects Coming</h3>
                    <p class="text-gray-700">Additional projects with descriptions and screenshots will be added here.</p>
                </div>
            </div>
        </section>
    </div>
@endsection
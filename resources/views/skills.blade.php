@extends('layouts.app')

@section('title', 'Skills')

@section('content')
    <div class="container mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold mb-8 bg-linear-to-r from-electric to-neonpurple bg-clip-text text-transparent inline-block max-w-max"
            style="animation: typewriter 8s steps(15) infinite, blink 0.7s step-end infinite alternate; overflow: hidden; white-space: nowrap; border-right: 3px solid; border-image: linear-gradient(to bottom, #00d4ff, #d946ef) 1; padding-right: 2px;">
            Technical Skills
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

        <div class="max-w-4xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-blue-50 rounded-lg p-6 border-l-4 border-electric hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold text-electric mb-2">Python</h3>
                    <p class="text-gray-700 mb-2">Automation, web frameworks, data processing, scripting</p>
                    <p class="text-sm text-gray-600"><strong>Proficiency:</strong> Advanced</p>
                </div>

                <div
                    class="bg-purple-50 rounded-lg p-6 border-l-4 border-neonpurple hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold text-neonpurple mb-2">HTML / CSS / JavaScript</h3>
                    <p class="text-gray-700 mb-2">Front-end design and responsive layouts</p>
                    <p class="text-sm text-gray-600"><strong>Proficiency:</strong> Advanced</p>
                </div>

                <div
                    class="bg-blue-50 rounded-lg p-6 border-l-4 border-electric hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold text-electric mb-2">Laravel / PHP</h3>
                    <p class="text-gray-700 mb-2">Back-end development and web applications</p>
                    <p class="text-sm text-gray-600"><strong>Proficiency:</strong> Advanced</p>
                </div>

                <div
                    class="bg-purple-50 rounded-lg p-6 border-l-4 border-neonpurple hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold text-neonpurple mb-2">Database Management</h3>
                    <p class="text-gray-700 mb-2">MySQL, SQLite</p>
                    <p class="text-sm text-gray-600"><strong>Proficiency:</strong> Intermediate</p>
                </div>

                <div
                    class="bg-blue-50 rounded-lg p-6 border-l-4 border-electric hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold text-electric mb-2">Git & GitHub</h3>
                    <p class="text-gray-700 mb-2">Version control and collaboration</p>
                    <p class="text-sm text-gray-600"><strong>Proficiency:</strong> Advanced</p>
                </div>

                <div
                    class="bg-purple-50 rounded-lg p-6 border-l-4 border-neonpurple hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                    <h3 class="text-xl font-bold text-neonpurple mb-2">Other Tools</h3>
                    <p class="text-gray-700 mb-2">Tailwind CSS, Bootstrap, VS Code, APIs</p>
                    <p class="text-sm text-gray-600"><strong>Proficiency:</strong> Advanced</p>
                </div>
            </div>

            <section class="mt-16">
                <h2 class="text-3xl font-bold mb-6 text-darkgray">Skill Summary</h2>
                <div class="space-y-6">
                    <div
                        class="bg-gray-50 p-6 rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                        <h3 class="font-bold text-lg mb-2 text-darkgray">Front-End Expertise</h3>
                        <p class="text-gray-700">HTML5, CSS3, JavaScript (ES6+), React, Vue.js, Tailwind CSS, Bootstrap -
                            creating responsive, accessible, and interactive user interfaces.</p>
                    </div>

                    <div
                        class="bg-gray-50 p-6 rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                        <h3 class="font-bold text-lg mb-2 text-darkgray">Back-End Expertise</h3>
                        <p class="text-gray-700">PHP, Laravel, Python (Django, Flask), API development, RESTful services,
                            and database design - building scalable and efficient server-side solutions.</p>
                    </div>

                    <div
                        class="bg-gray-50 p-6 rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-300 ease-out cursor-pointer">
                        <h3 class="font-bold text-lg mb-2 text-darkgray">Full-Stack Capability</h3>
                        <p class="text-gray-700">End-to-end web application development from UI design through database
                            architecture, deployment, and maintenance.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
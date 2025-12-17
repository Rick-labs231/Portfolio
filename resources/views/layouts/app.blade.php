<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Ricknova - Crafting digital experiences that shine. Building the digital version of you...">
    <meta name="keywords" content="Ricknova, Web Developer, Python, Laravel, Full-Stack Development">
    <title>@yield('title', 'Ricknova') - Building the digital version of you…</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/logo.jpg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 font-sans relative" style="background-color: #ffffff;">
    <div
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-image: url('{{ asset("assets/logo.jpg") }}'); background-repeat: repeat; background-size: 300px 300px; background-attachment: fixed; opacity: 0.25; pointer-events: none; z-index: 0;">
    </div>
    <div style="position: relative; z-index: 1;">

        {{-- Header with Navigation --}}
        <header class="sticky top-0 z-50 bg-linear-to-r from-electric to-neonpurple text-white shadow-lg">
            <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <a href="{{ asset('assets/logo.jpg') }}" target="_blank" class="hover:opacity-90 transition">
                        <img src="{{ asset('assets/logo.jpg') }}" alt="Ricknova Logo"
                            class="w-12 h-12 rounded-md object-cover">
                    </a>
                    <a href="/" class="hover:opacity-90 transition">
                        <div>
                            <div class="font-bold leading-tight">Ricknova</div>
                            <div class="text-xs leading-tight opacity-90">Building the digital version of you…</div>
                        </div>
                    </a>
                </div>
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}"
                        class="px-3 py-2 rounded-md transition-all duration-200 @if(Route::currentRouteName() === 'home') bg-white/20 font-semibold @else hover:bg-white/10 @endif">Home</a>
                    <a href="{{ route('about') }}"
                        class="px-3 py-2 rounded-md transition-all duration-200 @if(Route::currentRouteName() === 'about') bg-white/20 font-semibold @else hover:bg-white/10 @endif">About</a>
                    <a href="{{ route('services') }}"
                        class="px-3 py-2 rounded-md transition-all duration-200 @if(Route::currentRouteName() === 'services') bg-white/20 font-semibold @else hover:bg-white/10 @endif">Services</a>
                    <a href="{{ route('skills') }}"
                        class="px-3 py-2 rounded-md transition-all duration-200 @if(Route::currentRouteName() === 'skills') bg-white/20 font-semibold @else hover:bg-white/10 @endif">Skills</a>
                    <a href="{{ route('contact') }}"
                        class="px-3 py-2 rounded-md transition-all duration-200 @if(Route::currentRouteName() === 'contact') bg-white/20 font-semibold @else hover:bg-white/10 @endif">Contact</a>
                </div>
                <button class="md:hidden text-white text-2xl" id="mobileMenuBtn">☰</button>
            </nav>

            {{-- Mobile Menu --}}
            <div id="mobileMenu" class="hidden md:hidden bg-blue-600 border-t border-blue-400">
                <div class="container mx-auto px-6 py-4 flex flex-col gap-2">
                    <a href="{{ route('home') }}"
                        class="px-4 py-2 rounded transition-all duration-200 block @if(Route::currentRouteName() === 'home') bg-blue-800 font-semibold @else hover:bg-blue-700 @endif">Home</a>
                    <a href="{{ route('about') }}"
                        class="px-4 py-2 rounded transition-all duration-200 block @if(Route::currentRouteName() === 'about') bg-blue-800 font-semibold @else hover:bg-blue-700 @endif">About</a>
                    <a href="{{ route('services') }}"
                        class="px-4 py-2 rounded transition-all duration-200 block @if(Route::currentRouteName() === 'services') bg-blue-800 font-semibold @else hover:bg-blue-700 @endif">Services</a>
                    <a href="{{ route('skills') }}"
                        class="px-4 py-2 rounded transition-all duration-200 block @if(Route::currentRouteName() === 'skills') bg-blue-800 font-semibold @else hover:bg-blue-700 @endif">Skills</a>
                    <a href="{{ route('contact') }}"
                        class="px-4 py-2 rounded transition-all duration-200 block @if(Route::currentRouteName() === 'contact') bg-blue-800 font-semibold @else hover:bg-blue-700 @endif">Contact</a>
                </div>
            </div>
        </header>

        <script>
            document.getElementById('mobileMenuBtn').addEventListener('click', function () {
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.toggle('hidden');
            });
        </script>

        {{-- Main Content --}}
        <main class="min-h-screen">
            @yield('content')
        </main>

        {{-- Footer --}}
        <footer class="bg-darkgray text-white py-12">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <div class="font-bold text-lg mb-2">Ricknova</div>
                        <div class="text-sm text-gray-300">Building the digital version of you…</div>
                    </div>
                    <div>
                        <div class="font-semibold mb-3">Contact</div>
                        <div class="text-sm text-gray-300 space-y-1">
                            <div>WhatsApp: <a href="https://wa.me/2348154411519" target="_blank"
                                    class="text-electric hover:underline">+234 815 441 1519</a></div>
                            <div>Email: <a href="mailto:odingaeric293@gmail.com"
                                    class="text-electric hover:underline">odingaeric293@gmail.com</a></div>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold mb-3">Follow</div>
                        <div class="text-sm text-gray-300">
                            <a href="https://github.com/Ricklabs-231" target="_blank"
                                class="text-electric hover:underline">GitHub: Ricklabs-231</a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
                    <p>&copy; 2025 Ricknova. All rights reserved.</p>
                </div>
            </div>
        </footer>

        {{-- WhatsApp Floating Button --}}
        <a href="https://wa.me/2348154411519" target="_blank" rel="noopener noreferrer"
            class="fixed right-6 bottom-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:shadow-xl hover:scale-110 transition-all duration-200 z-40">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-5.031 1.378c-3.055 2.2-5.001 5.97-4.999 9.766.001 3.407.755 6.638 2.19 9.596l-2.344 8.55c-.335 1.224.56 2.324 1.85 1.98l8.368-2.273c2.829.881 5.858 1.35 9.035 1.35 9.688 0 17.55-7.862 17.55-17.55S21.938 2.75 12.25 2.75z" />
            </svg>
        </a>
    </div>

</html>
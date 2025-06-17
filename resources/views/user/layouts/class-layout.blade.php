<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GLOW')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-pink': '#F189B8',
                    },
                    fontFamily: {
                        'abril': ['Abril Fatface', 'cursive'],
                        'poppins': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-gray-50 flex flex-col min-h-screen font-poppins">

    {{-- Navbar --}}
    <nav x-data="{ open: false }" class="bg-primary-pink fixed top-0 left-0 w-screen z-50">
        <div class="flex md:px-4 mx-3 items-center justify-between h-[77px]">

            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="text-white font-bold text-2xl font-abril tracking-wider">GLOW</a>
            </div>

            <div class="hidden md:flex md:items-center md:space-x-9">
                <a href="{{ url('/') }}" class="text-white hover:underline transition-colors text-md">Home</a>
                <a href="{{ url('/') }}" class="text-white hover:underline transition-colors text-md">About
                    Us</a>
                <a href="{{ url('/') }}" class="text-white hover:underline transition-colors text-md">Classes</a>
                <a href="{{ url('/') }}" class="text-white hover:underline transition-colors text-md">Contact
                    Us</a>
            </div>

            <div class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen"
                    class="flex items-center justify-center w-10 h-10 rounded-full bg-white border-2 border-primary-pink text-primary-pink hover:bg-pink-50 transition-colors"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <ul x-show="isOpen" @click.away="isOpen = false" 
                    class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
                    <li><a class="block px-4 py-2 text-gray-800 hover:bg-pink-50"
                            href="{{ route('profil') }}">Profile</a></li>
                    <li>
                        <hr class="my-2 border-gray-200">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-gray-800 hover:bg-pink-50">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="-mr-2 flex md:hidden">
            <button id="hamburger-button" type="button"
                class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-pink-500 focus:outline-none">
                <span class="sr-only">Open main menu</span>
                <svg id="hamburger-icon" class="h-6 w-6 block" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg id="close-icon" class="h-6 w-6 hidden" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        </div>

        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ url('/') }}"
                    class="text-white hover:bg-pink-500 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="/dashboard#about-us"
                    class="text-white hover:bg-pink-500 block px-3 py-2 rounded-md text-base font-medium">About Us</a>
                <a href="/dashboard#classes"
                    class="text-white hover:bg-pink-500 block px-3 py-2 rounded-md text-base font-medium">Classes</a>
                <a href="/dashboard#contach"
                    class="text-white hover:bg-pink-500 block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
            </div>
            <div class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen"
                    class="flex items-center justify-center w-10 h-10 rounded-full bg-white border-2 border-primary-pink text-primary-pink hover:bg-pink-50 transition-colors"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <ul x-show="isOpen" @click.away="isOpen = false"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
                    <li><a class="block px-4 py-2 text-gray-800 hover:bg-pink-50"
                            href="{{ route('profil') }}">Profile</a></li>
                    <li>
                        <hr class="my-2 border-gray-200">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-gray-800 hover:bg-pink-50">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="flex-grow pt-16">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-primary-pink text-white text-center py-4 mt-auto">
        <p class="text-sm">&copy; 2025 Copyright: glowithus.com</p>
        <small>Designed by glowithus</small>
    </footer>

    {{-- JavaScript untuk Menu Mobile (Vanilla JS) --}}
    <script>
        const hamburgerButton = document.getElementById('hamburger-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        hamburgerButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>
</body>

</html>

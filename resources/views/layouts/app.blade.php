<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        header.sticky3 {
            background: #000;
        }

        [x-cloak] {
            display: none !important;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.2/dist/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="font-sans antialiased" x-data="{openMobile: false}" :class="openMobile ? 'overflow-y-hidden' : ''">
    <header
        class="fixed top-0 left-0 z-10 flex flex-row items-center justify-between w-full px-8 py-4 mb-12 transition-all duration-300 ease-in-out lg:py-12">
        <h2 class="text-xl font-bold text-gray-800 lg:text-3xl">OSP Robakowo<span class="text-red-700">.</span></h2>
        <ul class="flex-row flex-wrap justify-end flex-grow hidden list-none lg:flex navigation">
            <li><a href="{{route('home')}}/#home" class="links">Home</a></li>
            <li><a href="{{route('home')}}/#news" class="links">Aktualności</a></li>
            <li><a href="{{route('home')}}/#stations" class="links">Remiza</a></li>
            <li><a href="{{route('home')}}/#gallery" class="links">Galeria</a></li>
            <li><a href="{{route('home')}}/#teams" class="links">Zarząd OSP</a></li>
        </ul>
        <div class="cursor-pointer lg:hidden" @click="openMobile = true">
            <x-heroicon-o-menu class="w-6 h-6" />
        </div>
    </header>
    <!-- mobile menu -->
    <div x-show="openMobile" x-cloak class="mobile-menu">
        <div class="fixed inset-0 z-20 w-full max-h-screen bg-red-900 opacity-30">
        </div>
        <div class="fixed inset-0 z-30 max-h-screen bg-white border-r-2 border-red-700 w-60"
            @click.away="openMobile = false" x-show="openMobile" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-full">
            <div class="flex items-center justify-end p-4 text-gray-800">
                <h2 class="hidden text-xl font-bold">OSP Robakowo<span class="text-red-700">.</span></h2>
                <x-heroicon-o-x class="w-8 h-8 cursor-pointer hover:text-red-700" @click="openMobile = false" />
            </div>
            <ul class="flex flex-col items-center justify-start w-full h-full mt-24 text-xl">
                <li><a href="{{route('home')}}/#home" class="m-links" @click="openMobile = false">Home</a></li>
                <li><a href="{{route('home')}}/#news" class="m-links" @click="openMobile = false">Aktualności</a></li>
                <li><a href="{{route('home')}}/#stations" class="m-links" @click="openMobile = false">Remiza</a></li>
                <li><a href="{{route('home')}}/#gallery" class="m-links" @click="openMobile = false">Galeria</a></li>
                <li><a href="{{route('home')}}/#teams" class="m-links" @click="openMobile = false">Zarząd OSP</a></li>
            </ul>
        </div>
    </div>


    {{$slot}}


    @stack('modals')

    @livewireScripts


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
        });

        const li = document.querySelectorAll(".links");
        const lim = document.querySelectorAll(".m-links");
        const sec = document.querySelectorAll("section");

        function activeMenu() {
            let len = sec.length;
            while (--len && window.scrollY + 168 < sec[len].offsetTop) { }
            li.forEach((ltx) => ltx.classList.remove("active"));
            li[len].classList.add("active");

            lim.forEach((ltx) => ltx.classList.remove("active"));
            lim[len].classList.add("active");
        }
        activeMenu();

        const header = document.querySelector("header");

        if (window.scrollY > 0) {
            header.classList.add('sticky2');
        }
        window.addEventListener("scroll", function () {
            header.classList.toggle("sticky2", window.scrollY > 0);
            activeMenu();
        });
    </script>
</body>

</html>
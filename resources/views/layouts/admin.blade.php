<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} --admin</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.2/dist/themes.css" rel="stylesheet" type="text/css" />

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

<body class="admin">
    <div class="flex flex-col min-h-screen">
        <header class="block w-full h-16 mb-8 border-b">
            <div class="flex items-center justify-between h-full px-4 mx-auto max-w-7xl">
                <div>
                    <p class="text-xl font-semibold text-zinc-500">
                        <a href="/admin">OSP Robakowo<span class="text-3xl text-red-500">.</span></a> <span
                            class="text-base text-blue-300">#administracja</span>
                    </p>
                </div>

                <div class="space-x-3 text-zinc-400">
                    <button class="hover:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" width="1em" height="1em"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                            </path>
                        </svg>
                    </button>
                    <button class="hover:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-4xl text-indigo-300 sm:text-5xl">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </button>

                    <button class="hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                            <line x1="12" y1="2" x2="12" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <div class="flex flex-1 w-full px-4 py-4 mx-auto space-x-4 max-w-7xl">
            <div class="hidden w-64 space-y-10 text-sm text-zinc-700 lg:block">
                <!-- #1 -->
                <div class="space-y-4">
                    <p class="font-semibold tracking-wider uppercase text-zinc-400">Admin</p>
                    <ul class="space-y-1">
                        <li class="active">
                            <a href="">Panel</a>
                        </li>
                        <li>
                            <a href="">Aktualności</a>
                        </li>
                        <li>
                            <a href="">Zarząd</a>
                        </li>
                    </ul>
                </div>
                <!-- #2 -->
                <div class="space-y-4">
                    <p class="font-semibold tracking-wider uppercase text-zinc-400">Konto</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="">Profil</a>
                        </li>
                        <li>
                            <a href="">Zmień hasło</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <div class="flex w-full p-4 mb-12 space-x-5 border rounded-md bg-slate-50 border-zinc-100">
                    <div class="text-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <div class="">
                        <h2 class="mb-2 text-2xl text-zinc-600">Panel administracyjny</h2>
                        <p class="text-sm text-justify text-zinc-400">Narzędzia administracyjne serwisu <strong
                                class="tracking-wider">osprobakowo.pl</strong></p>
                    </div>
                </div>

                @livewire('basic-info')

            </div>
        </div>
    </div>







    {{$slot}}



    @stack('modals')

    @livewireScripts


</body>

</html>
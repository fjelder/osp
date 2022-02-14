<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} --admin</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.2/dist/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="relative pt-10 mx-auto font-sans text-sm max-w-7xl">


    <a href="{{route('home')}}" target="_blank" class="absolute top-0 left-0 font-semibold text-blue-500">Home</a>

    {{$slot}}


    @stack('modals')

    @livewireScripts


</body>

</html>
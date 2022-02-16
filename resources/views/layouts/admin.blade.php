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

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

<body class="flex flex-col min-h-screen text-gray-200 bg-slate-800 border-red-accent-700">





    <div class="border-b-2 border-red-accent-700">
        @livewire('navigation-menu')
    </div>

    <div class="flex-1 px-4 py-6 mx-auto max-w-7xl ">
        {{$slot}}
        <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
    </div>


    @stack('modals')

    @livewireScripts


</body>

</html>
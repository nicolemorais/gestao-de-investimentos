<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="font-sans text-gray-900 antialiased">

    @include('components.scrollbar')

    <!-- Backgrond -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-4 sm:pt-0 bg--800 bg-gray-100">

        <!-- Logo -->
        <div class="p-6 mb-4 py-2">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current" />
            </a>
        </div>

        <!-- Form Background  -->
        <div class="px-4 py-4 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-10">

            <div
                class="grid flex-wrap gap-x-10 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl  bg-slate-50">

                <div class="hidden lg:block w-full sm:max-w-md overflow-hidden sm:rounded-lg">
                    <img class=" h-full object-center bg-cover rounded-l-lg" src="./images/imgLogin2.gif" alt="Gif de um homem jogando moeda para o alto">
                </div>

                <div class="px-3 py-3">
                    <div class="w-full sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg bg-gradient-to-r from-teal-600 to-cyan-700">
                        <!-- Form -->
                        <div class="mt-6 space-y-1">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

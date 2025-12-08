<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#F0F8FF] via-[#E8F4F8] to-[#F0F8FF] py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full">
                <!-- Logo e Título -->
                <div class="text-center mb-8">
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('images/logoazul.png') }}" alt="Logo" class="h-20 w-auto">
                    </div>
                    <h1 class="text-3xl font-bold text-[#003262] mb-2">Sistema Jurídico</h1>
                    <p class="text-gray-600">Gestão Advocatícia</p>
                </div>

                <!-- Card do Formulário -->
                <div class="bg-white rounded-2xl shadow-xl border border-[#20729E]/20 p-8">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
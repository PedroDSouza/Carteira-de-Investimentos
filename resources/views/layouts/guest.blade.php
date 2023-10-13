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


    <body class="font-sans text-gray-900 antialiased">

        @include('components.scrollbar')

        <!-- Backgrond -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-4 sm:pt-0 bg--800 bg-gray-100">

            <!-- Logo -->
            <div>
                <a href="{{ route('ativo') }}">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <!-- Form Background  -->
            <div class="px-4 py-4 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-10">

                <div class="grid flex-wrap gap-x-10 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50">
                    
                        <div class="hidden lg:block w-full sm:max-w-md  overflow-hidden sm:rounded-lg">
                            <img class="object-cover h-full bg-cover rounded-l-lg" src="./images/imgLogin.svg" alt="">
                        </div>

                    <div class="px-3 py-3">
                        <div class="w-full sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg" style="background: rgb(34,149,150);  background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%);">
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

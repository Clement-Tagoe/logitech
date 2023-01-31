<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://kit.fontawesome.com/d142341c64.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased text-sky-900 font-bold">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white ml-72 mt-16">
                    <div class="mx-auto py-3 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            {{-- Main Menu Navigation --}}
            <section class="fixed bg-white border-r border-t border-gray-100 top-16 left-0 w-72 h-screen">
                <h4 class="uppercase px-3 pt-4 text-sm">
                    main menu
                </h4>
                <ul class=" flex flex-col space-y-6 p-6">
                    <li class="border-b border-gray-100 pb-4">
                        <a href="{{route('dashboard')}}">
                            <i class="fas fa-th"></i>
                            <span class="pl-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="border-b border-gray-100 pb-4">
                        <a href="{{route('freights.index')}}">
                            <i class="fas fa-layer-group"></i>
                            <span class="pl-3">Freights</span>
                        </a>
                    </li>
                    <li class="border-b border-gray-100 pb-4">
                        <a href="#">
                            <i class="fas fa-truck-moving"></i>
                            <span class="pl-3">Transport</span>
                        </a>
                    </li>
                    <li class="border-b border-gray-100 pb-4">
                        <a href="#">
                            <i class="fas fa-warehouse"></i>
                            <span class="pl-3">Warehousing</span>
                        </a>
                    </li>
                </ul>
            </section>


            <!-- Page Content -->
            <main class="ml-72">
                {{ $slot }}
            </main>
        </div>

        @if(session('success_message'))
            <x-notification-status
                redirect="true"
                messageToDisplay="{{ (session('success_message')) }}"
            />
        @endif
        @livewireScripts
    </body>
</html>

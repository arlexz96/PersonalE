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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    </head>
    <body class="font-sans antialiased">


        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <nav class="bg-gray-800 p-4">
                    <div class="max-w-7xl mx-auto flex justify-between items-center">
                        <!-- Logo o título -->
                        <a href="{{ url('/') }}" class="text-white text-xl font-bold">Personal Expenses</a>
                        
                        <!-- Enlaces de navegación -->
                        <div class="space-x-4">
                            <a href="{{ route('expenses.index') }}" class="text-white hover:text-gray-400">Expenses</a>
                            <a href="{{ route('categories.index') }}" class="text-white hover:text-gray-400">Categories</a>
                        </div>
                    </div>
                </nav>
                
                @yield('content')
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
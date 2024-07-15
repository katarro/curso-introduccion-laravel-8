<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smec | Generador de Pautas </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- Navbar --}}
    <header class="shadow-lg">
        <div class="bg-customBlue-900 py-1"></div>
        <nav class="bg-customBlue-900 pl-4 py-2 flex justify-start">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg') }}" class="mx-auto h-8">
            </a>
        </nav>
    </header>

    {{-- Main --}}
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-md text-gray-700 underline">Ingresar</a>
            <a href="{{ route('register') }}" class="ml-4 text-md text-gray-700 underline">Registrar</a>
        @endif
    </footer>
</body>
</html>

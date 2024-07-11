<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description', 'Descripción de la página')">
    <meta name="keywords" content="@yield('keywords', 'palabras, clave, por, defecto')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Título de la página')</title>

    <!-- Open Graph meta tags -->
    <meta property="og:title" content="@yield('og:title', 'Título de la página')">
    <meta property="og:description" content="@yield('og:description', 'Descripción de la página')">
    <meta property="og:type" content="@yield('og:type', 'website')">
    <meta property="og:url" content="@yield('og:url', request()->url())">
    <meta property="og:image" content="@yield('og:image', asset('default-image.jpg'))">
    <meta property="og:site_name" content="@yield('og:site_name', config('app.name'))">

    @vite('resources/css/app.css')
    @stack('head')
</head>
<body class="bg-black min-w-72">
    <header class="bg-purple">
        <div class="flex flex-row container mx-auto p-5 gap-7 font-mono text-white">
            <a class="flex gap-7 text-2xl hover:cursor-pointer" href="{{ url('/') }}">
                <i class="fa-solid fa-book-open content-center"></i>
                <div>@yield('header-title', 'Título del Header')</div>
            </a>
        </div>
    </header>

    <main class="flex flex-col container mx-auto p-10 gap-y-6 font-mono text-white">
        @yield('content')
    </main>

    <footer style="display: contents" class="absolute w-screen start-0 bottom-0">
        <div class="text-center bg-purple text-white py-4">© CAMAYOC TEAM</div>
    </footer>

    @stack('scripts')
</body>
</html>

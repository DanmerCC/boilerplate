<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel')</title>

    @vite(['resources/admin/css/admin.css', 'resources/admin/js/admin.js'])
    @stack('head')
</head>

<body class="bg-gray-100 min-w-72">

    <div id="app">
        <router-view></router-view>
    </div>

    @stack('scripts')
</body>

</html>

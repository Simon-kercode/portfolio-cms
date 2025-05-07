<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Futura.dev') }} - Administration</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="min-h-screen bg-background font-sans antialiased" style="font-family: 'Space Grotesk', sans-serif;">
    <div class="min-h-screen bg-background relative overflow-hidden" x-data="{ sidebarOpen: false }" >
        <!-- Animated background -->
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        @include('admin.partials.sidebar')

        <div class="flex flex-col" :class="{ 'lg:ml-64': sidebarOpen, 'lg:ml-20': !sidebarOpen }">
            @include('admin.partials.header')

            <main class="flex-1 p-4 md:p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

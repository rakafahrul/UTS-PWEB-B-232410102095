<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    @include('partials.header')

    <!-- Main Content -->
    <div class="container mx-auto py-8">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

    @vite('resources/js/app.js')
</body>
</html>

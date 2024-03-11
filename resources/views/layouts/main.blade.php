<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME', 'Movies') }} | @yield('title')</title>

    {{-- Import Vite & co --}}
    @vite('resources/js/app.js')

    {{-- CDNS --}}
    @yield('cdns')

</head>
<body class="bg-primary-subtle">

    {{-- Header --}}
    @include('includes.header')

    {{-- Main --}}
    <main class="container">
        @yield('main-content')
    </main>

    {{-- Footer --}}
    <footer></footer>
    
    {{-- Scripts --}}
    @yield('scripts')

</body>
</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Gema Music School')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('components.header')
    @include('components.navigation')

    <main class="main-content">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
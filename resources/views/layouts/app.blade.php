<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? 'We buy junk cars for cash in Chicago, IL. Free towing, same-day pickup, and top dollar paid for all makes and models. Call 1 (331) 341-4878 for a free quote.' }}">
    <title>{{ $title ?? "Titan Cash For Junk Cars | Chicago's #1 Junk Car Buyers | Call 331-341-4878" }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        (function () {
            var modes = { light: 1, dark: 1, auto: 1 };
            var m = localStorage.getItem('titan-theme-mode');
            if (!modes[m]) m = 'auto';
            var dark = m === 'dark' || (m === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);
            document.documentElement.setAttribute('data-bs-theme', dark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-titan-theme', m);
        })();
    </script>
</head>
<body class="titan-page d-flex flex-column min-vh-100">
    @include('partials.preloader')
    @include('partials.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>

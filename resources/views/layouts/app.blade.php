<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="{{ $metaDescription ?? 'Cash for junk cars in Chicago, IL — free towing, same-day pickup, top dollar for any make or model. Call (331) 341-4878 for a free quote from Titan Cash For Junk Cars.' }}">
    <title>{{ $title ?? 'Cash for Junk Cars Chicago, IL | Free Towing | Titan | 331-341-4878' }}</title>

    <link rel="icon" href="https://titan-cash-for-junk-cars.com/./images/logo.webp" type="image/x-icon" />
    <link rel="sitemap" type="application/xml" title="Sitemap"
        href="https://titan-cash-for-junk-cars.com/sitemap.xml" />
    <meta name="author" content="sami Ismaeel alnjadat SAM95NJT">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Sync theme before first paint; titan.js refines labels/icons after DOM ready. --}}
    <script>
        (function() {
            var modes = {
                light: 1,
                dark: 1,
                auto: 1
            };
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

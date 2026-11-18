<!DOCTYPE html>
<html lang="en-US" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <link rel="canonical" href="{{ $canonical }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="sami Ismaeel alnjadat SAM95NJT">
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0e1525" media="(prefers-color-scheme: dark)">

    {{-- Social sharing --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="{{ $site['name'] }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:image" content="{{ $site['url'] }}/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Titan Cash For Junk Cars — free towing and cash on the spot in Chicago">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $site['url'] }}/images/og-image.jpg">

    {{-- Icons --}}
    <link rel="icon" href="/favicon.ico" sizes="16x16 32x32 48x48">
    <link rel="icon" href="/icons/favicon-32.png" type="image/png" sizes="32x32">
    <link rel="icon" href="/icons/favicon-96.png" type="image/png" sizes="96x96">
    <link rel="icon" href="/icons/icon-192.png" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preload" href="/fonts/archivo-latin-wdth.woff2" as="font" type="font/woff2" crossorigin>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Apply the saved theme before first paint (titan.js handles the toggle). --}}
    <script>
        (function() {
            var m = 'auto';
            try { m = localStorage.getItem('titan-theme-mode') || 'auto'; } catch (e) {}
            if (m !== 'light' && m !== 'dark') m = 'auto';
            var dark = m === 'dark' || (m === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);
            document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme-mode', m);
        })();
    </script>

    <script type="application/ld+json">{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) !!}</script>

    @if ($site['gtm_id'])
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
                var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '{{ $site['gtm_id'] }}');
        </script>
        <!-- End Google Tag Manager -->
    @endif
</head>

<body>
    @if ($site['gtm_id'])
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $site['gtm_id'] }}" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
    @endif
    @include('partials.icon-sprite')

    <a class="skip-link" href="#main">Skip to content</a>

    @include('partials.navbar')

    <main id="main">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.mobile-cta')
</body>

</html>

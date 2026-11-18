@php
    $navLinks = [
        '#how-it-works' => 'How It Works',
        '#why-us' => 'Why Titan',
        '#cars-we-buy' => 'Cars We Buy',
        '#service-area' => 'Service Area',
        '#faq' => 'FAQ',
    ];
@endphp
<header id="site-header" class="site-header" data-header>
    <div class="container header-bar">
        <a href="{{ route('home') }}" class="brand" aria-label="{{ $site['name'] }} — home">
            @include('partials.titan-logo', ['size' => 56])
            <span class="brand-text">
                <span class="brand-name">Titan <span>Cash</span></span>
                <span class="brand-sub">For Junk Cars</span>
            </span>
        </a>

        <nav class="nav" aria-label="Primary">
            @foreach ($navLinks as $href => $label)
                <a href="{{ $href }}">{{ $label }}</a>
            @endforeach
        </nav>

        <div class="header-actions">
            <button type="button" class="icon-btn theme-toggle" data-theme-toggle aria-label="Color theme: Auto">
                <x-icon name="sun" class="theme-icon theme-icon--light" />
                <x-icon name="moon" class="theme-icon theme-icon--dark" />
                <x-icon name="auto" class="theme-icon theme-icon--auto" />
            </button>
            <a href="tel:{{ $site['phone'] }}" class="btn btn-primary btn-sm header-call">
                <x-icon name="phone" />
                <span>{{ $site['phone_display'] }}</span>
            </a>
            <button type="button" class="icon-btn menu-toggle" data-menu-toggle aria-controls="mobile-nav"
                aria-expanded="false" aria-label="Open menu">
                <x-icon name="menu" class="menu-icon-open" />
                <x-icon name="close" class="menu-icon-close" />
            </button>
        </div>
    </div>

    <nav id="mobile-nav" class="mobile-nav" aria-label="Mobile">
        <div class="container">
            @foreach ($navLinks as $href => $label)
                <a href="{{ $href }}" class="mobile-nav-link">{{ $label }}</a>
            @endforeach
            <a href="#contact" class="mobile-nav-link">Contact</a>
            <a href="tel:{{ $site['phone'] }}" class="btn btn-primary btn-lg btn-block">
                <x-icon name="phone" /> Call {{ $site['phone_display'] }}
            </a>
        </div>
    </nav>
</header>

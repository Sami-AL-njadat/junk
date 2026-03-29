@php
    $src = file_exists(public_path('images/logo.png'))
        ? asset('images/logo.png')
        : asset('images/logo.svg');
    $alt = $alt ?? 'Titan Cash For Junk Cars';
    $cls = trim('titan-logo-img ' . ($class ?? ''));
@endphp
<img src="{{ $src }}" alt="{{ $alt }}" class="{{ $cls }}" @if (isset($width)) width="{{ $width }}" height="{{ $height ?? $width }}" @endif @if (!empty($loading)) loading="{{ $loading }}" @endif decoding="async">

@php
    $alt = $alt ?? 'Titan Cash For Junk Cars';
    $cls = trim('titan-logo-img ' . ($class ?? ''));
@endphp
<img
    src="{{ $titanLogoSrc }}"
    alt="{{ $alt }}"
    class="{{ $cls }}"
    @if (isset($width)) width="{{ $width }}" height="{{ $height ?? $width }}" @endif
    @if (! empty($loading)) loading="{{ $loading }}" @endif
    decoding="async"
>

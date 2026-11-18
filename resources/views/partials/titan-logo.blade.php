@php
    // Square logo; $size is the rendered height (and width) in px.
    $size = $size ?? 56;
@endphp
<img src="{{ asset('images/logo-128.webp') }}"
    srcset="{{ asset('images/logo-128.webp') }} 128w, {{ asset('images/logo-256.webp') }} 256w, {{ asset('images/logo-384.webp') }} 384w"
    sizes="{{ $size }}px" width="{{ $size }}" height="{{ $size }}" alt="{{ $alt ?? '' }}"
    class="{{ trim('brand-mark '.($class ?? '')) }}" @if (! empty($lazy)) loading="lazy" decoding="async" @endif>

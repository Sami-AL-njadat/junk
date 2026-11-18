@php
    $size = $size ?? 44;
@endphp
<img src="{{ asset('images/logo-mark-96.webp') }}"
    srcset="{{ asset('images/logo-mark-96.webp') }} 96w, {{ asset('images/logo-mark-192.webp') }} 192w"
    sizes="{{ $size }}px" width="{{ $size }}" height="{{ $size }}" alt="{{ $alt ?? '' }}"
    class="{{ trim('brand-mark '.($class ?? '')) }}" decoding="async">

@php
    // Crest artwork is 252 × 262; $size is the rendered height in px.
    $size = $size ?? 52;
    $width = (int) round($size * 252 / 262);
@endphp
<img src="{{ asset('images/logo.svg') }}" width="{{ $width }}" height="{{ $size }}" alt="{{ $alt ?? '' }}"
    class="{{ trim('brand-mark '.($class ?? '')) }}">

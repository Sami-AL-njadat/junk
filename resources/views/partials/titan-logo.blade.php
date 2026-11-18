@php
    $size = $size ?? 44;
@endphp
<img src="{{ asset('images/logo-mark.svg') }}" width="{{ $size }}" height="{{ $size }}" alt="{{ $alt ?? '' }}"
    class="{{ trim('brand-mark '.($class ?? '')) }}">

@props(['name'])
<svg {{ $attributes->merge(['class' => 'icon']) }} aria-hidden="true" focusable="false"><use href="#i-{{ $name }}"></use></svg>

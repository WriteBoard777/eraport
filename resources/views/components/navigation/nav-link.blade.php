@props(['route', 'icon' => null])

@php
    $active = request()->routeIs($route) ? 'bg-blue-100 text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600';
@endphp

<li>
    <a href="{{ route($route) }}" class="flex items-center gap-2 px-3 py-2 rounded-lg {{ $active }}">
        @if($icon)
            <x-dynamic-component :component="'lucide-' . $icon" class="w-4 h-4" />
        @endif
        <span>{{ $slot }}</span>
    </a>
</li>

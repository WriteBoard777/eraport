@props(['title', 'value', 'icon' => null])

<div class="bg-white rounded-xl shadow p-5 flex items-center justify-between">
    <div>
        <h3 class="text-sm text-gray-500">{{ $title }}</h3>
        <p class="text-2xl font-bold text-gray-800 mt-1">{{ $value }}</p>
    </div>
    @if($icon)
        <x-dynamic-component :component="'lucide-' . $icon" class="w-6 h-6 text-blue-500" />
    @endif
</div>

{{-- <x-layouts.app.sidebar :title="$title ?? null"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <flux:main>
        {{ $slot }}
    </flux:main>
{{-- </x-layouts.app.sidebar> --}}

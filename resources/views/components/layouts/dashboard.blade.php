<x-layouts.app.dashboard-sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.dashboard-sidebar>

<x-filament-panels::page full-height="true" >
    <div x-data wire:ignore.self class="md:flex border border-gray-400 dark:border-gray-700 gap-2 shadow overflow-hidden min-h-max">
        @foreach($statuses as $status)
            @include('filament-kanban::kanban-status')
        @endforeach

        <div wire:ignore>
            @include('filament-kanban::kanban-scripts')
        </div>

        @unless($disableEditModal)
            <x-filament-kanban::edit-record-modal/>
        @endunless
    </div>
</x-filament-panels::page>

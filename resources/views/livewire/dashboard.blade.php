<x-slot name="title">Dashboard</x-slot>

<div class="container w-full mx-auto">
    <x-stats.stats :stats="$this->getStats()" />

    <livewire:datatables.users-table lazy />
</div>

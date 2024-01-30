<div
    class="container border border-gray-300 dark:border-neutral-700 w-full justify-center mx-auto gap-4 py-8 pt-6 px-9 dark:bg-neutral-800 bg-neutral-50 mt-4 rounded-xl">

    <livewire:datatables.components.header />

    <table class="w-full my-0 align-middle text-dark">
        <thead class="align-bottom">
        <tr class="font-semibold text-[0.95rem] text-secondary-dark w-full">
            <th class="pb-3 text-neutral-900 dark:text-neutral-400 text-start">
                <button wire:click="sort('name')">
                    NAME
                    @if($sortDirection === 'asc' && $sortColumn === 'name')
                        <x-heroicon-m-arrow-up class="inline w-4 h-4 ml-4" />
                    @elseif($sortDirection === 'desc' && $sortColumn === 'name')
                        <x-heroicon-m-arrow-down class="inline w-4 h-4 ml-4" />
                    @else
                        <x-heroicon-m-arrows-up-down class="inline w-4 h-4 ml-4" />
                    @endif
                </button>
            </th>
            <th class="pb-3 text-neutral-900 dark:text-neutral-400 text-start">
                <button wire:click="sort('email')">
                    EMAIL
                    @if($sortDirection === 'asc' && $sortColumn === 'email')
                        <x-heroicon-m-arrow-up class="inline w-4 h-4 ml-4" />
                    @elseif($sortDirection === 'desc' && $sortColumn === 'email')
                        <x-heroicon-m-arrow-down class="inline w-4 h-4 ml-4" />
                    @else
                        <x-heroicon-m-arrows-up-down class="inline w-4 h-4 ml-4" />
                    @endif
                </button>
            </th>
            <th class="pb-3 text-neutral-900 dark:text-neutral-400 text-start">
                <button wire:click="sort('role')">
                    ROLE
                    @if($sortDirection === 'asc' && $sortColumn === 'role')
                        <x-heroicon-m-arrow-up class="inline w-4 h-4 ml-4" />
                    @elseif($sortDirection === 'desc' && $sortColumn === 'role')
                        <x-heroicon-m-arrow-down class="inline w-4 h-4 ml-4" />
                    @else
                        <x-heroicon-m-arrows-up-down class="inline w-4 h-4 ml-4" />
                    @endif
                </button>
            </th>
            <th class="pb-3 text-neutral-900 dark:text-neutral-400 text-start">
                <button wire:click="sort('created_at')">
                    CREATED AT
                    @if($sortDirection === 'asc' && $sortColumn === 'created_at')
                        <x-heroicon-m-arrow-up class="inline w-4 h-4 ml-4" />
                    @elseif($sortDirection === 'desc' && $sortColumn === 'created_at')
                        <x-heroicon-m-arrow-down class="inline w-4 h-4 ml-4" />
                    @else
                        <x-heroicon-m-arrows-up-down class="inline w-4 h-4 ml-4" />
                    @endif
                </button>
            </th>
            <th class="pb-3 text-neutral-900 dark:text-neutral-400 text-start">
                <button wire:click="sort('updated_at')">
                    UPDATED AT
                    @if($sortDirection === 'asc' && $sortColumn === 'updated_at')
                        <x-heroicon-m-arrow-up class="inline w-4 h-4 ml-4" />
                    @elseif($sortDirection === 'desc' && $sortColumn === 'updated_at')
                        <x-heroicon-m-arrow-down class="inline w-4 h-4 ml-4" />
                    @else
                        <x-heroicon-m-arrows-up-down class="inline w-4 h-4 ml-4" />
                    @endif
                </button>
            </th>
            <th class="pb-3 text-neutral-900 dark:text-neutral-400 text-start">
                ACTIONS
            </th>
        </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < 10; $i++)
                <tr class="border-b last:border-b-0 border-gray-300 dark:border-gray-700 animate-pulse" role="status">
                    <td class="p-3 !pl-0 text-start">
                        <div class="h-2 bg-gray-200 rounded-lg dark:bg-gray-600 min-h-[25px]"></div>
                    </td>
                    <td class="p-3 !pl-0 text-start">
                        <div class="h-2 bg-gray-200 rounded-lg dark:bg-gray-600 min-h-[25px]"></div>
                    </td>
                    <td class="p-3 !pl-0 text-start">
                        <div class="h-2 bg-gray-200 rounded-lg dark:bg-gray-600 min-h-[25px]"></div>
                    </td>
                    <td class="p-3 !pl-0 text-start">
                        <div class="h-2 bg-gray-200 rounded-lg dark:bg-gray-600 min-h-[25px]"></div>
                    </td>
                    <td class="p-3 !pl-0 text-start">
                        <div class="h-2 bg-gray-200 rounded-lg dark:bg-gray-600 min-h-[25px]"></div>
                    </td>
                    <td class="pr-0 text-start">
                        <div class="h-2 bg-gray-200 rounded-lg dark:bg-gray-600 min-h-[25px]"></div>
                    </td>
                    <span class="sr-only">Loading...</span>
                </tr>
            @endfor
        </tbody>
    </table>

    <div class="flex justify-between mt-3 gap-6">
        <div class="relative inline-block w-24">
            <select
                wire:model.live="pagination"
                class="block appearance-none w-full bg-neutral-50 dark:bg-neutral-900 border border-neutral-300 dark:border-neutral-700 text-neutral-700 dark:text-neutral-300 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500"
            >
                <option value="1">1</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>

</div>

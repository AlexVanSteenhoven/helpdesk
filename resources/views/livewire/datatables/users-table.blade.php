<div
    class="container border border-gray-300 dark:border-neutral-700 w-full justify-center mx-auto gap-4 py-8 pt-6 px-9 dark:bg-neutral-800 bg-neutral-50 mt-4 rounded-xl">
    <livewire:datatables.components.header
        search="true"
        filters="true"
        export="false"
    />

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
        @foreach($users as $user)
            <tr class="border-b last:border-b-0">
                <td class="p-3 !pl-0 text-start">
                    <span
                        class="font-semibold text-neutral-950 dark:text-neutral-200 text-md/normal">
                        {{ $user->name }}
                    </span>
                </td>
                <td class="p-3 !pl-0 text-start">
                    <span
                        class="font-semibold text-neutral-950 dark:text-neutral-200 text-md/normal">
                        {{ $user->email }}
                    </span>
                </td>
                <td class="p-3 !pl-0 text-start">
                    <span class="font-semibold text-neutral-950 dark:text-neutral-200 text-md/normal">
                        Role
                    </span>
                </td>
                <td class="p-3 !pl-0 text-start">
                    <span
                        class="font-semibold text-neutral-950 dark:text-neutral-200 text-md/normal">
                        {{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y H:i:s') }}
                    </span>
                </td>
                <td class="p-3 !pl-0 text-start">
                    <span class="font-semibold text-neutral-950 dark:text-neutral-200 text-md/normal">
                        {{ \Carbon\Carbon::parse($user->updated_at)->format('d-m-Y H:i:s') }}
                    </span>
                </td>
                <td class="pr-0 text-start">
                    <span class="font-semibold text-neutral-950 dark:text-neutral-200 text-md/normal">
                        <a href="#" class="text-neutral-600 hover:text-neutral-900 dark:text-neutral-300 dark:hover:text-neutral-100">
                            Edit
                        </a>
                    </span>
                </td>
            </tr>
        @endforeach
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

        <div class="w-auto flex-grow">
            {{ $users->links() }}
        </div>
    </div>

</div>

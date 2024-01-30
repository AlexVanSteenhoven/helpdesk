<div class="mb-6 w-full flex justify-between">
    <div class="relative">
        <x-heroicon-o-magnifying-glass class="absolute w-4 h-4 top-3 left-3 dark:text-neutral-200 text-neutral-900" />
        <input
            type="text"
            class="bg-neutral-200 dark:bg-neutral-900 text-neutral-900 dark:text-neutral-200 border border-gray-300 dark:border-neutral-700 h-10 px-10 rounded-lg focus:outline-none hover:cursor-pointer"
            placeholder="search"
            wire:model.live.debounce.300ms="search"
        >
    </div>

    <div class="flex flex-row">
        <button class="bg-transparent font-semibold p-3 border border-gray-300 dark:border-neutral-700 dark:hover:bg-neutral-900 hover:bg-neutral-300 rounded-lg mr-2">
            <x-heroicon-o-funnel class="w-5 h-5 text-neutral-900 dark:text-neutral-200"/>
        </button>


        <div class="flex justify-center">
            <div
                x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
                x-on:keydown.escape.prevent.stop="close($refs.button)"
                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                x-id="['dropdown-button']"
                class="relative"
            >
                <!-- Button -->
                <button
                    x-ref="button"
                    x-on:click="toggle()"
                    :aria-expanded="open"
                    :aria-controls="$id('dropdown-button')"
                    type="button"
                    class="flex items-center gap-2 p-3 rounded-lg shadow border border-gray-300 dark:border-neutral-700 bg-neutral-200 dark:bg-neutral-800 dark:hover:bg-neutral-900 hover:bg-neutral-300"
                >
                    <x-heroicon-o-funnel class="w-5 h-5 text-neutral-900 dark:text-neutral-200"/>
                </button>

                <!-- Panel -->
                <div
                    x-ref="panel"
                    x-show="open"
                    x-transition.origin.top.left
                    x-on:click.outside="close($refs.button)"
                    :id="$id('dropdown-button')"
                    style="display: none;"
                    class="absolute right-0 mt-2 w-40 rounded-lg border border-gray-300 dark:border-neutral-700 bg-neutral-200 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-900 hover:bg-neutral-300 shadow-md"
                >
                    <a href="#" wire:click="$parent.test()" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                        New Task
                    </a>

                    <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                        Edit Task
                    </a>

                    <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                        <span class="text-red-600">Delete Task</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

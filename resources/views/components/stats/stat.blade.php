<div class="w-1/3 border border-gray-300 shadow bg-gray-50 dark:border-neutral-700 dark:bg-neutral-800 rounded-lg py-12 px-6">
    <div class="flex gap-8">
        <div class="w-1/2">
            <h1 class="text-2xl font-bold mb-4 dark:text-neutral-50 text-neutral-900">{{ $title ?? 'Stat not found' }}</h1>
            <p class="dark:text-gray-400 text-neutral-700">{{ $subtitle ?? 'Stat not found' }}</p>
        </div>
        <div class="w-1/2 flex justify-center items-center flex-row gap-x-3">
            <span class="text-5xl font-bold dark:text-neutral-50 text-neutral-900">
                {{ $stat ?? 'Stat not found' }}
            </span>

            {{ $icon ?? '' }}
        </div>
    </div>
</div>

<div class="flex justify-center w-full mx-auto gap-4">
{{--    <div class="w-1/4 border border-gray-300 shadow bg-gray-50 dark:border-neutral-700 dark:bg-neutral-800 rounded-lg py-12 px-6">--}}
{{--        <div class="flex gap-8">--}}
{{--            <div class="w-1/2">--}}
{{--                <h1 class="text-2xl font-bold mb-4 dark:text-neutral-50 text-neutral-900">Users</h1>--}}
{{--                <p class="dark:text-gray-400 text-neutral-700">You're logged in!</p>--}}
{{--            </div>--}}
{{--            <div class="w-1/2 flex justify-center items-center flex-row gap-x-3">--}}
{{--                <span class="text-5xl font-bold dark:text-neutral-50 text-neutral-900">{{ $this->getStats('users') }}</span>--}}
{{--                <x-heroicon-s-user class="dark:text-neutral-50 text-neutral-900 w-10 h-10" />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    --}}
    @if(isset($stats))
        @foreach($stats as $stat)
{{--            @dd($stat)--}}
            <x-stats.stat :title="$stat['title']" :stat="$stat['count']" :subtitle="$stat['subtitle']"  />
        @endforeach
    @endif

{{--    <div class="w-1/4 border border-gray-300 shadow bg-gray-50 dark:border-neutral-700 dark:bg-neutral-800 rounded-lg p-12">--}}
{{--        <h1 class="text-2xl font-bold mb-4 dark:text-neutral-50 text-neutral-900">Dashboard</h1>--}}
{{--        <p class="dark:text-gray-400 text-neutral-700">You're logged in!</p>--}}
{{--    </div>--}}
{{--    <div class="w-1/4 border border-gray-300 shadow bg-gray-50 dark:border-neutral-700 dark:bg-neutral-800 rounded-lg p-12">--}}
{{--        <h1 class="text-2xl font-bold mb-4 dark:text-neutral-50 text-neutral-900">Dashboard</h1>--}}
{{--        <p class="dark:text-gray-400 text-neutral-700">You're logged in!</p>--}}
{{--    </div>--}}
</div>

<div class="flex items-center p-4">
    <!-- Default button: System mode -->
    <button
        x-data="{ theme: localStorage.getItem('color-theme') ?? 'light' }"
        x-on:click="setTheme('light')"
        class="py-2 my-0 px-4 focus:outline-none text-white rounded-l-md"
        :class="theme === 'light' ? 'bg-blue-600' : 'bg-blue-500'"
    >
        <x-heroicon-s-sun class="h-6 w-6" />
    </button>
    <!-- Light mode button -->
    <button
        x-data="{ theme: localStorage.getItem('color-theme') ?? 'system' }"
        x-on:click="setTheme('system')"
        class="py-2 my-0 px-4 focus:outline-none text-white"
        :class="theme === 'system' ? 'bg-blue-600' : 'bg-blue-500'"
    >
        <x-heroicon-o-computer-desktop class="h-6 w-6" />
    </button>
    <!-- Dark mode button -->
    <button
        x-data="{ theme: localStorage.getItem('color-theme') ?? 'dark' }"
        x-on:click="setTheme('dark')"
        class="py-2 my-0 px-4 focus:outline-none text-white rounded-r-md"
        :class="theme === 'dark' ? 'bg-blue-600' : 'bg-blue-500'"
    >
        <x-heroicon-s-moon class="h-6 w-6" />
    </button>
</div>

<script>
    function setTheme(mode) {
        switch (mode) {
            case 'light':
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');

                break;
            case 'dark':
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');

                break;
            case 'system':
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }

                localStorage.setItem('color-theme', 'system')

                break;

        }
    }

    if (localStorage.getItem('color-theme')) {
        setTheme(localStorage.getItem('color-theme'));
    } else {
        setTheme('system');
    }
</script>

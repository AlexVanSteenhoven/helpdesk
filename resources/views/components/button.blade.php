@props(['size' => 'md', 'variant' => 'primary', 'type' => 'button', 'class' => ''])

<button
    type="{{ $type }}"
    {{
        $attributes->class([
            'inline-flex items-center justify-center border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring disabled:opacity-25 transition ease-in-out duration-150',
            'px-4 py-2 text-sm' => $size === 'md',
            'px-2 py-1 text-xs' => $size === 'sm',
            'px-6 py-3 text-lg' => $size === 'xl',
            'bg-blue-600 hover:bg-blue-500 focus:border-blue-700 active:bg-blue-700 text-white dark:bg-blue-500 dark:hover:bg-blue-400 dark:focus:border-blue-600 dark:active:bg-blue-600 dark:text-white' => $variant === 'primary',
            'bg-gray-600 hover:bg-gray-500 focus:border-gray-700 active:bg-gray-700 text-white dark:bg-gray-700 dark:hover:bg-gray-800 dark:focus:border-gray-600 dark:active:bg-gray-800 dark:text-white' => $variant === 'secondary',
            'bg-red-600 hover:bg-red-500 focus:border-red-700 active:bg-red-700 text-white dark:bg-red-700 dark:hover:bg-red-800 dark:focus:border-red-600 dark:active:bg-red-800 dark:text-white' => $variant === 'danger',
            'bg-green-600 hover:bg-green-500 focus:border-green-700 active:bg-green-700 text-white dark:bg-green-700 dark:hover:bg-green-800 dark:focus:border-green-600 dark:active:bg-green-800 dark:text-white' => $variant === 'success',
            'bg-yellow-600 hover:bg-yellow-500 focus:border-yellow-700 active:bg-yellow-700 text-white dark:bg-yellow-700 dark:hover:bg-yellow-800 dark:focus:border-yellow-600 dark:active:bg-yellow-800 dark:text-white' => $variant === 'warning',
            'bg-gray-300 hover:bg-gray-200 focus:border-gray-400 active:bg-gray-400 text-gray-700 dark:bg-gray-700 dark:hover:bg-gray-800 dark:focus:border-gray-600 dark:active:bg-gray-800 dark:text-white' => $variant === 'light',
            'bg-gray-800 hover:bg-gray-700 focus:border-gray-900 active:bg-gray-900 text-white dark:bg-gray-900 dark:hover:bg-gray-1000 dark:focus:border-gray-800 dark:active:bg-gray-1000 dark:text-white' => $variant === 'dark',

            $class
        ])
    }}
>
    {{ $slot }}
</button>

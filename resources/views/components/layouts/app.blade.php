<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title . " :: Helpdesk" ?? "Helpdesk" }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-neutral-100 dark:bg-neutral-900 h-screen">
        <x-button-group />
        {{ $slot }}

        @livewireScripts
    </body>
</html>

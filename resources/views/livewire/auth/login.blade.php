<?php

use function Livewire\Volt\{layout, state, form};
use App\Livewire\Forms\LoginForm;

state('email', '');
state('password', '');

form(LoginForm::class);

$login = function () {
    $this->form->login();
}
?>
<x-slot name="title">Login</x-slot>

<div class="flex justify-center items-center h-full">
    <div class="w-1/2 border border-gray-300 shadow bg-gray-50 dark:border-neutral-700 dark:bg-neutral-800 rounded-lg p-12">
        <form wire:submit="login">
            <x-input
                wire:model="form.email"
                type="email"
                name="email"
                label="Email"
                class="{{ !$errors->has('form.email') ? 'mb-4' : 'mb-1' }}"
            />

            <x-input
                wire:model="form.password"
                type="password"
                name="password"
                label="Password"
                class="{{ !$errors->has('form.password') ? 'mb-4' : 'mb-1' }}"
            />

            <x-button type="submit" size="md" variant="primary"> Login</x-button>
        </form>
    </div>
</div>

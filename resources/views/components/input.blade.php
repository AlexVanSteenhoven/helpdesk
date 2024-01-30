@props(['name', 'label', 'type' => 'text', 'value' => '', 'class' => ''])

<div>
    <label class="dark:text-white text-neutral-800" for="{{ $name }}">{{ $label }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $value }}"
        {{
            $attributes->class([
                'bg-neutral-50 mt-1 border text-neutral-900 text-sm rounded-lg focus:ring-blue-500
                focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:placeholder-neutral-400
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                $errors->has('form.' . $name) ? '!border-red-600 !border-2' : 'border-neutral-300',
                $class
            ])
        }}
    />

    @error('form.' . $name)
        <p class="text-red-600 text-sm mb-4">{{ $message }}</p>
    @enderror
</div>

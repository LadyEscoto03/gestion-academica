<div>
    <form wire:submit='store'
        class="space-y-4 max-w-2xl p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md">
        <x-form.input label="Identificación" name="identification"></x-form.input>
        <x-form.input label="Nombre" name="name"></x-form.input>
        <x-form.input label="Primer apellido" name="surname"></x-form.input>
        <x-form.input label="Segundo apellido (si aplica)" name="second_surname"></x-form.input>
        <x-form.input label="Correo electrónico" name="email" type="email"></x-form.input>
        <x-form.input label="Teléfono de contacto" name="telephone_number" type="phone"></x-form.input>
        <!-- primary Button -->
        <button type="button"
            class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Primary</button>

    </form>
</div>

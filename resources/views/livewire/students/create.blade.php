<div>
    <form wire:submit='save'
        class="space-y-4 max-w-2xl p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md">
        <x-form.input label="Identificación" wire:model='form.identification' name="form.identification"></x-form.input>
        <x-form.input label="Nombre" wire:model='form.name' name="form.name"></x-form.input>
        <x-form.input label="Primer apellido" wire:model='form.surname' name="form.surname"></x-form.input>
        <x-form.input label="Segundo apellido (si aplica)" wire:model='form.second_surname' name="form.second_surname"></x-form.input>
        <x-form.input label="Correo electrónico" wire:model='form.email'  name="form.email" type="email"></x-form.input>
        <x-form.input label="Teléfono de contacto" wire:model='form.telephone_number'  name="form.telephone_number" type="phone"></x-form.input>
        <!-- primary Button -->
        <button type="submit"
            class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            {{request()->routeIs('students.create')?'Agregar':'Actualizar'}}</button>

    </form>
</div>

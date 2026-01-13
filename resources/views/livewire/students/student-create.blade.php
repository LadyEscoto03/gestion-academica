<div>
    <form wire:submit='save' class="space-y-4 max-w-2xl p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md">
        <x-form.input label="Identificación" wire:model='studentForm.identification' name="studentForm.identification"></x-form.input>
        <x-form.input label="Nombre" wire:model='studentForm.name' name="studentForm.name"></x-form.input>
        <x-form.input label="Primer apellido" wire:model='studentForm.surname' name="studentForm.surname"></x-form.input>
        <x-form.input label="Segundo apellido (si aplica)" wire:model='studentForm.second_surname'
            name="studentForm.second_surname"></x-form.input>
        <x-form.input label="Fecha de nacimiento" wire:model='studentForm.birth_date' name="studentForm.birth_date"
            type="date"></x-form.input>
        <x-form.input label="Correo electrónico" wire:model='studentForm.email' name="studentForm.email"
            type="email"></x-form.input>
        <x-form.input label="Teléfono de contacto" wire:model='studentForm.telephone_number' name="studentForm.telephone_number"
            type="phone"></x-form.input>

        <!-- primary Button -->
        <button type="submit"
            class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            {{ request()->routeIs('students.create') ? 'Agregar' : 'Actualizar' }}</button>
    </form>
</div>

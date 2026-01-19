<div
    class="flex h-full w-full flex-col gap-3 p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md  justify-center items-center">
    <div class="h-auto text-left w-full max-w-3xl">

        <h1 class="text-2xl font-bold">{{ $pages[$currentPage]['heading'] }}</h1>
        <span class="text-sm">{{ $pages[$currentPage]['subHeading'] }}</span>

    </div>

    <div class="flex md:flex-row w-full max-w-3xl h-auto p-4 border rounded-lg shadow-md justify-center gap-4">
        @if ($currentPage == 1)
            <div class="md:w-1/2">
                <x-form.input label="Identificación" wire:model='studentForm.identification'
                    name="studentForm.identification"></x-form.input>
                <x-form.input label="Nombre" wire:model='studentForm.name' name="studentForm.name"></x-form.input>
                <x-form.input label="Primer apellido" wire:model='studentForm.surname'
                    name="studentForm.surname"></x-form.input>
                <x-form.input label="Segundo apellido (si aplica)" wire:model='studentForm.second_surname'
                    name="studentForm.second_surname"></x-form.input>
            </div>
            <div class="md:w-1/2">
                <x-form.input label="Fecha de nacimiento" wire:model='studentForm.birth_date'
                    name="studentForm.birth_date" type="date"></x-form.input>
                <x-form.input label="Correo electrónico" wire:model='studentForm.email' name="studentForm.email"
                    type="email"></x-form.input>
                <x-form.input label="Teléfono de contacto" wire:model='studentForm.telephone_number'
                    name="studentForm.telephone_number" type="phone"></x-form.input>
            </div>
        @endif
        @if ($currentPage == 2)
            <div class="md:w-1/2">

            </div>
            <div class="md:w-1/2">

            </div>
        @endif

        @if ($currentPage == 3)
            <div class="md:w-1/2">

            </div>
            <div class="md:w-1/2">

            </div>
        @endif

        @if ($currentPage == 4)
            <div class="md:w-1/2">
                <x-form.select label="Selecciona una provincia" name="LocationForm.province_id"
                    wire:model.live="locationForm.province_id">
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </x-form.select>
            </div>
            <div class="md:w-1/2">
                <x-form.select label="Selecciona un cantón" name="LocationForm.canton_id"
                    wire:model.live="locationForm.canton_id">
                    @foreach ($cantons as $canton)
                        <option value="{{ $canton->id }}">{{ $canton->name }}</option>
                    @endforeach
                </x-form.select>
                <x-form.select label="Selecciona un distrito" name="LocationForm.district_id"
                    wire:model.live="locationForm.district_id">
                    @foreach ($districts as $district)
                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                    @endforeach
                </x-form.select>
            </div>
        @endif
        @if ($currentPage == 5)
        @endif
    </div>
    <div class="flex justify-center gap-4">
        @if ($currentPage != 1)
            <button type="button" wire:click="goToPreviousPage"
                class="whitespace-nowrap rounded-radius bg-secondary border border-secondary px-4 py-2 text-sm font-medium tracking-wide text-on-secondary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-secondary-dark dark:border-secondary-dark dark:text-on-secondary-dark dark:focus-visible:outline-secondary-dark">Anterior</button>
        @endif
        @if ($currentPage == count($pages))
            <button type="button"
                class="whitespace-nowrap rounded-radius bg-success border border-success px-4 py-2 text-sm font-medium tracking-wide text-onSuccess transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-success dark:border-success dark:text-onSuccess dark:focus-visible:outline-success">Enviar</button>
        @else
            <!-- primary Button -->
            <button type="button" wire:click="goToNextPage"
                class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Siguiente</button>
        @endif
    </div>

</div>

<div
    class="flex h-full w-full flex-col gap-3 p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md  justify-center items-center">
    <div class="h-auto text-left w-full max-w-3xl">

        <h1 class="text-2xl font-bold">{{ $pages[$currentPage]['heading'] }}</h1>
        <span class="text-sm">{{ $pages[$currentPage]['subHeading'] }}</span>

    </div>

    <div class="flex md:flex-row w-full max-w-3xl h-auto p-4 border-accent rounded-lg shadow-md justify-center gap-4">
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
            <div>
                @foreach ($disabilityCategories as $disabilityCategory)
                    @continue($disabilityCategory->name == 'Multidiscapacidad')
                    <div x-data="{ isAble: false }"
                        class="p-4 border rounded mb-4 text-on-surface has-disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" x-model="isAble" class="rounded border-gray-700">
                            <span class="">
                                ¿El estudiante padece alguna discapacidad {{ $disabilityCategory->name }}?
                            </span>
                        </label>
                        <div x-show="isAble" x-transition class="mt-2 space-y-2">

                            @foreach ($disabilityCategory->disabilities as $disability)
                                <div x-data="{ disability: false }">
                                    <label class="flex items-center justify-between border p-2 rounded">
                                        <span class="text-sm">{{ $disability->name }}</span>

                                        <input type="checkbox" x-model="disability" name="disabilities[]"
                                            value="{{ $disability->id }}" class="rounded border-gray-700">

                                    </label>
                                    <div x-show="disability" x-transition
                                        class="mt-2 space-y-2 p-2 border rounded-lg shadow">
                                        <x-form.input label="Fecha en que se diagnosticó la discapacidad"
                                            name="diagnosis" type="date"></x-form.input>
                                        <div
                                            class="flex w-full max-w-md flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                                            <label for="textArea" class="w-fit pl-0.5 text-sm">Describa cualquier
                                                aspecto
                                                considere importante
                                                para
                                                el estudiante y la matrícula (Opcional)</label>
                                            <textarea id="textArea"
                                                class="w-full rounded-radius border border-outline bg-surface-alt px-2.5 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark"
                                                rows="3"></textarea>
                                        </div>
                                        <x-form.input label="Adjunte el documento que respalde lo señalado"
                                            name="file" type="file"></x-form.input>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                @endforeach


            </div>
        @endif
        @if ($currentPage == 3)
            <div>
                @foreach ($grades as $grade)
                    <div class="p-2 gap-2">
                        <div class="flex flex-col gap-2">

                            <label for="radioLinux"
                                class="flex w-fit min-w-52 items-center justify-start gap-2 rounded-radius border border-outline bg-surface-alt px-4 py-2 font-medium text-on-surface has-disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                                <input id="radioLinux" type="radio"
                                    class="before:content[''] relative h-4 w-4 appearance-none rounded-full border border-outline bg-surface before:invisible before:absolute before:left-1/2 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-on-primary checked:border-primary checked:bg-primary checked:before:visible focus:outline-2 focus:outline-offset-2 focus:outline-outline-strong checked:focus:outline-primary disabled:cursor-not-allowed dark:border-outline-dark dark:bg-surface-dark dark:before:bg-on-primary-dark dark:checked:border-primary-dark dark:checked:bg-primary-dark dark:focus:outline-outline-dark-strong dark:checked:focus:outline-primary-dark"
                                    name="radioDefault" value="">
                                <span class="">{{ $grade->name }}</span>
                            </label>
                        </div>
                    </div>
                @endforeach
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
            <div>
                <x-form.input label="Adjunte fotocopia de cédula del estudiante a matricular" name="file"
                    type="file"></x-form.input>
                <x-form.input label="Adjunte fotocopia de cédula del encargado del estudiante" name="file"
                    type="file"></x-form.input>
            </div>
        @endif
    </div>
    <div class="flex justify-between w-full max-w-3xl">

        @if ($currentPage != 1)
            <button type="button" wire:click="goToPreviousPage"
                class="whitespace-nowrap rounded-radius bg-secondary border border-secondary px-4 py-2 text-sm font-medium tracking-wide text-on-secondary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-secondary-dark dark:border-secondary-dark dark:text-on-secondary-dark dark:focus-visible:outline-secondary-dark">Anterior</button>
        @endif
        @if ($currentPage == 1)
            <div></div>
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

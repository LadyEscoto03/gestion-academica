<div class="flex h-full w-full flex-col p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md">
    <form {{-- wire:submit='save' --}}>

        {{--
        <select wire:model.live="locationForm.province_id" class="form-select">
            <option value="">Seleccione provincia</option>
            @foreach ($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
        </select>

        <select wire:model.live="locationForm.canton_id" class="form-select">
            <option value="">Seleccione cantón</option>
            @foreach ($cantons as $canton)
                <option value="{{ $canton->id }}">{{ $canton->name }}</option>
            @endforeach
        </select>

        <select wire:model.live="locationForm.district_id" class="form-select">
            <option value="">Seleccione distrito</option>
            @foreach ($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
            @endforeach
        </select>
        --}}


        {{--

        <h3>{{ $pages[$currentPage]['heading'] }}</h3>
        <p>{{ $pages[$currentPage]['subHeading'] }}</p>
        @if ($currentPage == 1)
            <p>Paso 1</p>
            <div>
                <x-form.input label="Correo electrónico" wire:model='email' name="email" type="email"></x-form.input>
            </div>
        @endif
        @if ($currentPage == 2)
            <p>Paso 2</p>
        @endif

        @if ($currentPage == 3)
            <p>Paso 3</p>
        @endif

        @if ($currentPage != 1)
            <button type="button" wire:click="goToPreviousPage">Anteior</button>
        @endif

        @if ($currentPage == count($pages))
            <button type="button">Enviar</button>
        @else
            <button type="button" wire:click="goToNextPage">Siguiente</button>
        @endif 
        --}}




        <!-- primary Button -->
        {{-- <button type="submit"
            class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            {{ request()->routeIs('students.create') ? 'Agregar' : 'Actualizar' }}</button> --}}
    </form>
</div>

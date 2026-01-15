<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    @if (session('success'))
        <x-alert key="success"></x-alert>
    @endif

    <div>
        <div class="py-3">
            <a href="{{route('enrollments.create')}}"
                class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:border-primary-dark dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark"
                role="button">Añadir matrícula</a>
        </div>
        <x-table.table :headers="['Id', 'Año', 'Cédula estudiante', 'Nombre estudiante', 'Grado', 'Acciones']">
            @foreach ($enrollments as $enrollment)
                <x-table.tr>
                    <x-table.td> {{ $enrollment->id }} </x-table.td>
                    <x-table.td> {{ $enrollment->student->identification }} </x-table.td>
                    <x-table.td>
                        {{ $enrollment->student->name . ' ' . $enrollment->student->surname . ' ' . $enrollment->student->second_surname }}
                    </x-table.td>
                    <x-table.td> {{ $enrollment->gradeLevel->name }} </x-table.td>

                    <x-table.td>
                        <a href="#"
                            class="inline-flex justify-center items-center gap-2 whitespace-nowrap rounded-radius bg-warning border border-warning dark:border-warning px-2 py-1 text-sm font-medium tracking-wide text-on-warning transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-warning active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-warning dark:text-on-warning dark:focus-visible:outline-warning"
                            wire:navigate>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="size-5">
                                <path
                                    d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                <path
                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                            </svg>
                        </a>
                        {{--
                        <button wire:click="delete({{ $student }})" type="button"
                            wire:confirm="Estas seguro de eliminar al estudiante {{ $student->name . ' ' . $student->surname }} ?"
                            class="inline-flex justify-center items-center gap-2 whitespace-nowrap rounded-radius bg-danger border border-danger dark:border-danger px-2 py-1 text-sm font-medium tracking-wide text-on-danger transition hover:opacity-75 text-center  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-danger active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-danger dark:text-on-danger dark:focus-visible:outline-danger">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="size-5">
                                <path fill-rule="evenodd"
                                    d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                        --}}

                    </x-table.td>
                </x-table.tr>
            @endforeach
        </x-table.table>

        <div class="p-4">
            {{ $enrollments->links() }}
        </div>
    </div>


</div>

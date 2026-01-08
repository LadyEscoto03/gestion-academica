<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <a href="{{ route('students.create') }}"
        class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:border-primary-dark dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark"
        role="button">Crear estudiante</a>

    <div>
        <x-table.table :headers="['Id', 'Identificación', 'Nombre', 'email', 'Teléfono', 'Fecha registro', 'Acciones']">
            @foreach ($students as $student)
                <x-table.tr>
                    <x-table.td> {{ $student->id }} </x-table.td>
                    <x-table.td> {{ $student->name . ' ' . $student->surname . ' ' . $student->second_surname }}
                    </x-table.td>
                    <x-table.td> {{ $student->email }} </x-table.td>
                    <x-table.td> {{ $student->telephone_number }} </x-table.td>
                    <x-table.td> {{ $student->created_at }} </x-table.td>
                </x-table.tr>
            @endforeach
        </x-table.table>

        <div class="p-4">
            {{ $students->links() }}
        </div>
    </div>


</div>

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

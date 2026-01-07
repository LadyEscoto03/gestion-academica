 <x-table.table :headers="['Id', 'Identificación', 'Nombre', 'email', 'Teléfono', 'Fecha registro', 'Acciones']">
     @foreach ($students as $student)
         <x-table.tr>
            <x-table.td> {{ $student->id }}</x-table>
            <x-table.td> {{ $student->name . ' ' . $student->surname . ' ' . $student->second_surname }}</x-table>
            <x-table.td> {{ $student->email }}</x-table>
            <x-table.td> {{ $student->telephone_number }}</x-table>
            <x-table.td> {{ $student->created_at }}</x-table>
         </x-table.tr>
     @endforeach
 </x-table.table>
 <di class="p-4">
     {{ $students->links() }}
 </di>

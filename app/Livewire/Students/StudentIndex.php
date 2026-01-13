<?php

namespace App\Livewire\Students;

use App\Livewire\Forms\StudentForm;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    use WithPagination;

    public function delete(Student $student)
    {
        $student->delete();
        session()->flash('success', 'Estudiante eliminado correctamente');
        $this->redirectRoute('students.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.students.student-index', [
            'students' => Student::paginate(10),
        ]);
    }
}

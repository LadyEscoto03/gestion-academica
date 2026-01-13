<?php

namespace App\Livewire\Students;

use App\Livewire\Forms\StudentForm;
use Livewire\Component;

class StudentCreate extends Component
{
    public StudentForm $studentForm;

    public function save()
    {
        $this->studentForm->store();
        session()->flash('success', 'Estudiante agregado correctamente');
        $this->redirectRoute('students.index', navigate: true);
    }
    public function render()
    {
        return view('livewire.students.student-create');
    }
}

<?php

namespace App\Livewire\Students;

use App\Livewire\Forms\StudentForm;
use App\Models\Student;
use Livewire\Component;

class StudentUpdate extends Component
{
     public StudentForm $studentForm;

    public function mount(Student $student)  {
        $this->studentForm->setStudent($student);
    }

    public function save()  {
        $this->studentForm->update();
        session()->flash('success','Estudiante actualizado correctamente');
        $this->redirectRoute('students.index', navigate: true);
    }
   
    public function render()
    {
        return view('livewire.students.student-create');
    }
}

<?php

namespace App\Livewire\Students;

use App\Livewire\Forms\StudentForm;
use Livewire\Component;


class Create extends Component
{
    public StudentForm $form;

    public function save()
    {
        $this->form->store();
        session()->flash('success','Estudiante agregado correctamente');
        $this->redirectRoute('students.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.students.create');
    }
}

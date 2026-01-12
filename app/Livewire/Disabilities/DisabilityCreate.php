<?php

namespace App\Livewire\Disabilities;

use App\Livewire\Forms\EducationalSupportForm;
use App\Models\EducationalSupport;
use Livewire\Component;

class DisabilityCreate extends Component
{
    public EducationalSupportForm $educationalSupportForm;


    public function save()
    {
        $this->educationalSupportForm->store();
        session()->flash('success', 'Discapacidad agregada correctamente');
        $this->redirectRoute('disabilities.index', navigate: true);
    }
    public function render()
    {
        return view('livewire.disabilities.disability-create');
    }
}

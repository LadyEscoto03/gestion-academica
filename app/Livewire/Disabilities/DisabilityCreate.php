<?php

namespace App\Livewire\Disabilities;

use App\Livewire\Forms\DisabilityForm;
use Livewire\Component;

class DisabilityCreate extends Component
{
    public DisabilityForm $disabilityForm;


    public function save()
    {
        $this->disabilityForm->store();
        session()->flash('success', 'Discapacidad agregada correctamente');
        $this->redirectRoute('disabilities.index', navigate: true);
    }
    public function render()
    {
        return view('livewire.disabilities.disability-create');
    }
}

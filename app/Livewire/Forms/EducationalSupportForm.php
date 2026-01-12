<?php

namespace App\Livewire\Forms;

use App\Models\educationalSupport;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EducationalSupportForm extends Form
{
    #[Validate('required| max:255', as: 'nombre')]
    public $name = '';

    #[Validate('required', as: 'tipo')]
    public $type = '';

    public function store()
    {
        $this->validate();

        educationalSupport::create([

            'name' => $this->name,
            'type' => $this->type,

        ]);
    }
}

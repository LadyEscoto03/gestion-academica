<?php

namespace App\Livewire\Forms;

use App\Models\Disability;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DisabilityForm extends Form
{
    #[Validate('required| max:255', as: 'nombre')]
    public $name = '';

    #[Validate('required', as: 'tipo')]
    public $type = '';

    public function store()
    {
        $this->validate();

        Disability::create([

            'name' => $this->name,
            'type' => $this->type,

        ]);
    }
}

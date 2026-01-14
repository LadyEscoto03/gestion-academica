<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class EnrollmentForm extends Form
{
    #[Validate('required|numeric|min:4')]
    public $year = 0;
    #[Validate('nullable|string|max:255')]
    public $description = '';
    #[Validate('required|string|max:255')]
    public $state = '';
}

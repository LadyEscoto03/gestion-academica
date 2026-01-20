<?php

namespace App\Livewire\Forms;

use App\Models\DisabilityStudent;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DisabilityStudentForm extends Form
{
    #[Validate('required')]
    public $student_id = '';

    #[Validate('required')]
    public $desability_id = '';

    #[Validate('required|date')]
    public $diagnosis_date = '';

    #[Validate('nullable|max:255')]
    public $description = '';

    public function save()
    {
        $this->validate();
        DisabilityStudent::create([
            'student_id' => $this->student_id,
            'desability_id' => $this->desability_id,
            'diagnosis_date' => $this->diagnosis_date,
            'description' => $this->description,
        ]);
    }
}

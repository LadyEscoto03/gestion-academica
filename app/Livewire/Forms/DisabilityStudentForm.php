<?php

namespace App\Livewire\Forms;

use App\Models\DisabilityStudent;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DisabilityStudentForm extends Form
{
    #[Validate('required|date')]
    public $diagnosis_date = '';

    #[Validate('nullable|max:255')]
    public $description = '';

    public function store(string $student_id, string $desability_id)
    {
        $this->validate();
        DisabilityStudent::create([
            'student_id' => $student_id,
            'desability_id' => $desability_id,
            'diagnosis_date' => $this->diagnosis_date,
            'description' => $this->description,
        ]);
    }
}

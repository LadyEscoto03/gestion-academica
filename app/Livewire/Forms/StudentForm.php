<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

use function Livewire\store;

class StudentForm extends Form
{
    public ?Student $student;
    #[Validate('required| min:9|numeric', as: 'identificación')]
    public $identification = '';
    #[Validate('required|max:255|min:4|string', as: 'nombre')]
    public $name = '';
    #[Validate('required|max:255|min:4|string', as: 'primer apellido')]
    public $surname = '';
    #[Validate('required|max:255|min:4|string', as: 'segundo apellido')]
    public $second_surname = '';
    #[Validate('required|email', as: 'correo electrónico')]
    public $email = '';
    #[Validate('required|numeric|min_digits:7|max_digits:15', as: 'Teléfono de contacto')]
    public $telephone_number = '';


    public function setStudent(Student $student) {
        $this->student=$student;
        $this->identification=$student->identification;
        $this->name=$student->name;
        $this->surname=$student->surname;
        $this->second_surname=$student->second_surname;
        $this->email=$student->email;
        $this->telephone_number=$student->telephone_number;
    }

    public function update() {
        $this->validate();
        $this->student->update($this->all());
    }


    public function store()
    {
        $this->validate();

        Student::create([
            'identification' => $this->identification,
            'name' => $this->name,
            'surname' => $this->surname,
            'second_surname' => $this->second_surname,
            'email' => $this->email,
            'telephone_number' => $this->telephone_number,
            'user_id' => Auth::user()->id
        ]);
    }
}

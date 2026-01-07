<?php

namespace App\Livewire\Students;

use App\Models\Student;
use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;

class Index extends Component
{

    use WithoutUrlPagination;

    public $identification = '';
    public $name = '';
    public $surname = '';
    public $second_surname = '';
    public $email = '';
    public $telephone_number = '';
    public User $user;

    public function render()
    {
        return view('livewire.students.index', [
            'students' => Student::paginate(10),
        ]);
    }
}

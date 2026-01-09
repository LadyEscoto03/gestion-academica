<?php

namespace App\Livewire\Students;

use App\Models\Student;
use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    
    public function render()
    {
        return view('livewire.students.index', [
            'students' => Student::paginate(10),
        ]);
    }
}

<?php

namespace App\Livewire\Enrollments;

use App\Models\Enrollment;
use Livewire\Component;
use Livewire\WithPagination;

class EnrollmentIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.enrollments.enrollment-index', [
            'enrollments' => Enrollment::Paginate(10)
        ]);
    }
}

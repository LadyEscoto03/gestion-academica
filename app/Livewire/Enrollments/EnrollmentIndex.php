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
        $enrollments = Enrollment::with('student', 'gradeLevel','district')->Paginate(10);
      

        return view('livewire.enrollments.enrollment-index', compact('enrollments'));
    }
}

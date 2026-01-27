<?php

namespace App\Livewire\Enrollments;

use App\Livewire\Forms\DocumentForm;
use App\Livewire\Forms\EnrollmentForm;
use App\Livewire\Forms\LocationForm;
use App\Livewire\Forms\StudentForm;
use App\Models\Enrollment;
use App\Models\GradeLevel;
use App\Models\Province;
use Livewire\Component;

class EnrollmentUpdate extends Component
{
    // formularios
    public LocationForm $locationForm;

    public StudentForm $studentForm;

    public EnrollmentForm $enrollmentForm;

    public DocumentForm $documentForm;

    public ?Enrollment $enrollment;

    public $currentPage = 1;

    public $provinces = [];

    public $cantons = [];

    public $districts = [];

    public $grades = [];

    public function mount(Enrollment $enrollment)
    {
        $this->provinces = Province::all();

        $this->grades = GradeLevel::all();
        $this->setEnrollment($enrollment);
    }

    public function setEnrollment(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
        $this->enrollment->year = $enrollment->year;
        $this->enrollment->description = $enrollment->description;
        $this->enrollment->state = $enrollment->state;
        $student = $this->studentForm->searchStudentById($enrollment->student->identification);
        $this->studentForm->setStudent($student);
        $this->enrollment->gradeLevel->name = $enrollment->gradeLevel->name;
        $this->enrollment->district->name = $enrollment->name;

    }

    public $pages = [
        1 => [
            'heading' => 'Información de estudiante',
            'subHeading' => 'Ingrese los datos',
        ],
        2 => [
            'heading' => 'Grado a matricular',
            'subHeading' => 'Seleccione los datos',
        ],
        3 => [
            'heading' => 'Ubicación',
            'subHeading' => 'Seleccione los datos',
        ],
        4 => [
            'heading' => 'Documentos de respaldo',
            'subHeading' => 'Seleccione los datos',
        ],
    ];

    public function goToNextPage()
    {

        if ($this->currentPage == 1) {
            $this->studentForm->validate();
        }
        if ($this->currentPage == 2) {
            $this->enrollmentForm->validateOnly('grade_level_id');
        }
        if ($this->currentPage == 3) {
            $this->locationForm->validate();
        }

        if ($this->currentPage == 4) {
            $this->documentForm->validate();
        }

        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function render()
    {
        return view('livewire.enrollments.enrollment-create');
    }
}

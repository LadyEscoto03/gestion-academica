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
use Livewire\WithFileUploads;

class EnrollmentCreate extends Component
{
    use WithFileUploads;

    public LocationForm $locationForm;

    public StudentForm $studentForm;

    public EnrollmentForm $enrollmentForm;

    public DocumentForm $documentForm;

    private $year = 2026;

    public $currentPage = 1;

    public $files = [];

    // datos de los select dependiente de las ubicaciones
    public $district_id = '';

    public $cantons = [];

    public $districts = [];

    // datos que se inicializan al ingreso al componente (Método mount)
    public $provinces = [];

    public $grades = [];

    public function mount()
    {
        $this->provinces = Province::all();

        $this->grades = GradeLevel::all();
    }

    public function save()
    {
        $student = $this->studentForm->store();
        $this->enrollmentForm->validate();
        $enrollment = Enrollment::create([
            'year' => $this->year,
            'description' => '',
            'state' => 'Pendiente',
            'student_id' => $student->id,
            'grade_level_id' => $this->grade_id,
            'district_id' => $this->district_id,
        ]);
        if (! empty($files)) {
            foreach ($files as $file) {
                $this->documentForm->validate();
                $this->documentForm->store($enrollment->id);
            }
        }

    }

    public function updatedLocationFormProvinceId()
    {

        $this->cantons = $this->locationForm->getCantonByProvinceId();
    }

    public function updatedLocationFormCantonId()
    {

        $this->districts = $this->locationForm->getDistricByCantonId();
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

        /*
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
        */

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

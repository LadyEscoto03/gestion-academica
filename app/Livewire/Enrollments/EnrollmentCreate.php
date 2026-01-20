<?php

namespace App\Livewire\Enrollments;

use App\Livewire\Forms\LocationForm;
use App\Models\Disability;
use App\Models\DisabilityCategory;
use App\Models\GradeLevel;
use App\Models\Province;
use LaravelLang\LocaleList\Locale;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EnrollmentCreate extends Component
{
    public LocationForm $locationForm;
    public $currentPage = 1;

    public $cantons = [];
    public $districts = [];
    public $provinces = [];

    public $disabilityCategories = [];
    public $disabilities = [];
    public $grades=[];

    public function mount()
    {
        $this->provinces = Province::all();
        $this->disabilityCategories = DisabilityCategory::all();
        $this->disabilities = Disability::all();
        $this->grades=GradeLevel::all();
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
            'heading' => 'Discapacidades',
            'subHeading' => 'Ingrese los datos',
        ],
        3 => [
            'heading' => 'Grado a matricular',
            'subHeading' => 'Seleccione los datos',
        ],
        4 => [
            'heading' => 'Ubicación',
            'subHeading' => 'Seleccione los datos',
        ],
        5 => [
            'heading' => 'Documentos de respaldo',
            'subHeading' => 'Seleccione los datos',
        ]
    ];
    public function goToNextPage()
    {
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

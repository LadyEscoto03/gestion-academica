<?php

namespace App\Livewire\Enrollments;

use Livewire\Attributes\Validate;
use Livewire\Component;

class EnrollmentCreate extends Component
{
    public $currentPage=1;

    #[Validate('required|email')]
    public $email='';


    public $pages=[
        1=>[
            'heading'=>'Información de estudiante',
            'subHeading'=>'Ingrese los datos',
        ],
         2=>[
            'heading'=>'Discapacidades',
            'subHeading'=>'Ingrese los datos',
        ],
         3=>[
            'heading'=>'correos',
            'subHeading'=>'Ingrese los datos',
        ]
    ];
    public function goToNextPage()  {
        $this->validate();
        $this->currentPage++;
    }
    public function goToPreviousPage()  {
        $this->currentPage--;
    }




    public function render()
    {
        return view('livewire.enrollments.enrollment-create');
    }
}

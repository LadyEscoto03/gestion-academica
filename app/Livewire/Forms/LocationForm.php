<?php

namespace App\Livewire\Forms;

use App\Models\Canton;
use App\Models\District;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LocationForm extends Form
{
    #[Validate('required')]
    public $province_id = '';
    #[Validate('required')]
    public $canton_id = '';
    #[Validate('nullable')]
    public $district_id = '';

    public $provinces = [];
    public $cantons = [];
    public $districts = [];


    public function getCantonByProvinceId()
    {
        $this->cantons = Canton::where('province_id', $this->province_id)->get();
        $this->canton_id = '';
        $this->districts = [];
    }
    public function getDistricByCantonId()
    {
        $this->districts = District::where('canton_id', $this->canton_id)->get();
        $this->district_id = '';
    }
}

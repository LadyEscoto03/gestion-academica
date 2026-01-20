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
    #[Validate('required')]
    public $district_id = '';

    public function getCantonByProvinceId()
    {
        $this->canton_id = '';
        $this->district_id = '';
        return Canton::where('province_id', $this->province_id)->get();
    }
    public function getDistricByCantonId()
    {
        $this->district_id = '';
        return District::where('canton_id', $this->canton_id)->get();
    }
}

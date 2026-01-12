<?php

namespace App\Livewire\Disabilities;

use App\Models\EducationalSupport;
use Livewire\Component;
use Livewire\WithPagination;

class DisabilityIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.disabilities.disability-index', ['disabilities' => EducationalSupport::paginate(10)]);
    }
}

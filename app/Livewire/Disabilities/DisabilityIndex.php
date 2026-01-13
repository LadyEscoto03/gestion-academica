<?php

namespace App\Livewire\Disabilities;

use App\Models\Disability;
use Livewire\Component;
use Livewire\WithPagination;

class DisabilityIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.disabilities.disability-index', ['disabilities' => Disability::paginate(10)]);
    }
}

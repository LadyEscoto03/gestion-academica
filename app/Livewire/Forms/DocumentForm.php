<?php

namespace App\Livewire\Forms;

use App\Models\Document;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class DocumentForm extends Form
{
    use WithFileUploads;

    #[Validate('required|file|mimes|mimes:pdf,docx,xlsx|max:2048')]
    public $file;

    public function save(string $enrollment_id)
    {
        $this->validate();
        $name = $this->file->getOriginalName();
        $path = $this->file->store('documents', 'public');
        $enrollment_id = $enrollment_id;
        Document::create([
            'name' => $name,
            'path' => $path,
            'enrollment_id' => $enrollment_id,
        ]);

    }
}
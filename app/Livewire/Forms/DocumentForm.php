<?php

namespace App\Livewire\Forms;

use App\Models\Document;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class DocumentForm extends Form
{
    use WithFileUploads;

    #[Validate('required|file|mimes:pdf,docx,xlsx|max:2048')]
    public $file;

    #[Validate('nullable')]
    public $document_id = '';

    public function store(string $enrollment_id)
    {
        $this->validate();
        $name = $this->file->getClientOriginalName();
        $path = $this->file->store('documents', 'public');
        Document::create([
            'name' => $name,
            'path' => $path,
            'enrollment_id' => $enrollment_id,
        ]);

    }

    public function export()
    {
        if ($this->document_id) {
            $document = Document::findOrFail($this->document_id);

            return response()->download(storage_path($document->path));
        }
    }
}

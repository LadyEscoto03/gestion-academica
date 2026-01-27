<?php

namespace App\Livewire\Forms;

use App\Models\Document;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class DocumentForm extends Form
{
    use WithFileUploads;

    #[Validate([
        'files' => 'required|array|min:2',
        'files.*' => 'required|file|mimes:pdf,docx,xlsx|max:10240',
    ])]
    public $files = [];

    #[Validate('nullable')]
    public $document_id = '';

    public function save(string $enrollment_id)
    {
        $this->validate();

        foreach ($this->files as $file) {
            $name = $file->getClientOriginalName();
            $path = $file->store('documents', 'public');
            Document::create([
                'name' => $name,
                'path' => $path,
                'enrollment_id' => $enrollment_id,
            ]);
        }
    }

    public function export()
    {
        if ($this->document_id) {
            $document = Document::findOrFail($this->document_id);

            return response()->download(storage_path($document->path));
        }
    }
}

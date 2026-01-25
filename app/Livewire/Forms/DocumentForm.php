<?php

namespace App\Livewire\Forms;

use App\Models\Document;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class DocumentForm extends Form
{
    use WithFileUploads;

    #[Validate('required|file|mimes:pdf,docx,xlsx|max:10240',as: 'Fotocopia de cédula del estudiante')]
    public $fileStudentIdentification;

    #[Validate('required|file|mimes:pdf,docx,xlsx|max:10240', as : 'Fotocopia de cédula del encargado')]
    public $fileStudentRepresentativeIdentification;

    #[Validate('nullable')]
    public $document_id = '';

    public function store(string $enrollment_id)
    {
        $this->validate();

        $files = [$this->fileStudentIdentification, $this->fileStudentRepresentativeIdentification];

        foreach ($files as $key => $file) {
            if ($file) {
                $name = $file->getClientOriginalName();
                $path = $file->store('documents', 'public');
                Document::create([
                    'name' => $name,
                    'path' => $path,
                    'enrollment_id' => $enrollment_id,
                ]);

            }
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

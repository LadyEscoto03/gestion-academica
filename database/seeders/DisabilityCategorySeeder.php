<?php

namespace Database\Seeders;

use App\Models\DisabilityCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisabilityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            'Auditiva',
            'Sensorial',
            'Intelectual',
            'Psicosocial/Mental',
            'Motora/Física',
            'Neurológica',
            'Multidiscapacidad',
            'Habla y lenguaje',
            'Cognitiva',
            'Aprendizaje'
        ];

        foreach ($categories as $category){
            DisabilityCategory::create([
                'name'=>$category
            ]);

        }
        
    }
}

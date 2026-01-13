<?php

namespace Database\Seeders;

use App\Models\GradeLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GradeLevel::create([
            'name' => 'Séptimo',
            'description'=>'Primer año de secundaria'
        ]);
        GradeLevel::create([
            'name' => 'Octavo',
            'description'=>'Segundo año de secundaria'
        ]);
        GradeLevel::create([
            'name' => 'Noveno',
            'description'=> 'Tercer año de secundaria'
        ]);
        GradeLevel::create([
            'name' => 'Décimo',
            'description'=>'Tercer año de secundaria'
        ]);
        GradeLevel::create([
            'name' => 'Quinto',
            'description'=> 'Tercer año de secundaria'
        ]);
    }
}

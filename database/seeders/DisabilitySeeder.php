<?php

namespace Database\Seeders;

use App\Models\Disability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //discapacidad auditiva
        $auditories  = [
            'Hipoacusia',
            'Sordera',
            'Discapacidad auditiva unilateral',
            'Discapacidad auditiva bilateral',
            'Trastornos del procesamiento auditivo'
        ];

        foreach ($auditories as $auditory) {
            Disability::create([
                'name' => $auditory,
                'disability_category_id' => 1
            ]);
        }
        //discapacidad sensorial
        $sensories  = [
            'Discapacidad Visual (Ceguera/baja visión)',
            'Discapacidad olfativa',
            'Discapacidad gustativa',
            'Discapacidad táctil',
        ];
        foreach ($sensories as $sensory) {
            Disability::create([
                'name' => $sensory,
                'disability_category_id' => 2
            ]);
        }
        //discapacidad intelectual
        $intellectual  = [
            'Discapacidad intelectual leve',
            'Discapacidad intelectual moderada',
            'Discapacidad intelectual grave',
            'Discapacidad intelectual profunda'
        ];
        foreach ($intellectual as $in) {
            Disability::create([
                'name' => $in,
                'disability_category_id' => 3
            ]);
        }
        //discapacidad psicosocial
        $psychosocials  = [
            'Trastornos de ansiedad',
            'Trastornos depresivos',
            'Esquizofrenia',
            'Trastorno bipolar',
            'Trastorno obsesivo-compulsivo (TOC)',
            'Trastornos del espectro autista (TEA)',
            'Trastornos de la personalidad'
        ];
        foreach ($psychosocials as $psychosocial) {
            Disability::create([
                'name' => $psychosocial,
                'disability_category_id' => 4
            ]);
        }
        //discapacidad motora
        $motors  = [
            'Parálisis cerebral',
            'Amputación',
            'Lesión medular',
            'Esclerosis múltiple',
            'Distrofias musculares',
            'Ataxia',
            'Artritis y artrosis',
        ];
        foreach ($motors as $motor) {
            Disability::create([
                'name' => $motor,
                'disability_category_id' => 5
            ]);
        }
        //discapacidad neurológica
        $neurologicals  = [
            'Epilepsia',
            'Enfermedad de Parkinson',
            'Enfermedad de Alzheimer',
            'Accidente cerebrovascular (ACV)',
            'Esclerosis lateral amiotrófica (ELA)',
            'Trastornos del sueño (como la narcolepsia)'
        ];

        foreach ($neurologicals as $neurolgical) {
            Disability::create([
                'name' => $neurolgical,
                'disability_category_id' => 6
            ]);
        }
        //discapacidad de lenguaje
        $speech_and_languages  = [
            'Disartria',
            'Afasia',
            'Tartamudez',
            'Trastornos del lenguaje',
        ];

        foreach ($speech_and_languages as $speech_and_language) {
            Disability::create([
                'name' => $speech_and_language,
                'disability_category_id' => 8
            ]);
        }

        // discapacidad Cognitiva
        $cognitives  = [
            'Déficit de memoria',
            'Déficit de atención',
            'Trastornos ejecutivos',
            'Demencia'
        ];
        foreach ($cognitives as $cognitive) {
            Disability::create([
                'name' => $cognitive,
                'disability_category_id' => 9
            ]);
        }
        // discapacidad del Aprendizaje
        $learning_disabilities  = [
            'Dislexia',
            'Discalculia',
            'Disgrafía',
            'Trastornos del procesamiento auditivo'
        ];
        foreach ($learning_disabilities as $learning_disability) {
            Disability::create([
                'name' => $learning_disability,
                'disability_category_id' => 10
            ]);
        }
    }
}

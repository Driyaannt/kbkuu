<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicalHistory;

class MedicalHistorySeeder extends Seeder
{
    public function run()
    {
        MedicalHistory::create([
            'name_history' => 'OBESITAS IMT >27',
            'result_method_kb_id' => 1, // Sesuai dengan ID di ResultMethodKB
        ]);

        MedicalHistory::create([
            'name_history' => 'Hipertensi',
            'result_method_kb_id' => 1,
        ]);
    }
}

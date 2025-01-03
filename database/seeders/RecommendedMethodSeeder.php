<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecommendedMethod;

class RecommendedMethodSeeder extends Seeder
{
    public function run()
    {
        RecommendedMethod::create([
            'name_reccomended' => 'Pil KB',
            'result_method_kb_id' => 1, // Sesuai dengan ID di ResultMethodKB
        ]);

        RecommendedMethod::create([
            'name_reccomended' => 'Kondom',
            'result_method_kb_id' => 1,
        ]);
    }
}

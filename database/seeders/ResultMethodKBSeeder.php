<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResultMethodKB;

class ResultMethodKBSeeder extends Seeder
{
    public function run()
    {
        $kb = ResultMethodKB::create([
            'nama_akseptor' => 'hahaha',
            'nama_suami' => 'maam',
            'pendidikan_terakhir' => 's1',
            'tujuan_kb' => 'kaka',
            'section' => 'Metode KB',
            'no_hp' => '0832432423',
            'alamat' => 'bnanna',
            'pregnancy_status' => 'Belum Pernah Hamil',
            'age_category' => 'Usia Kurang Dari 20 Tahun',
        ]);
    }
}

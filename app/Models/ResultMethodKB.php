<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultMethodKB extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_akseptor',
        'nama_suami',
        'pendidikan_terakhir',
        'tujuan_kb',
        'no_hp',
        'alamat',
        'section',
        'pregnancy_status',
        'age_category',
    ];

    public function medicalHistories()
    {
        return $this->hasMany(MedicalHistory::class);
    }

    public function recommendedMethods()
    {
        return $this->hasMany(RecommendedMethod::class);
    }
}

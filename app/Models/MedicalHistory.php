<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_history',
        'result_method_kb_id',
    ];

    public function resultMethodKB()
    {
        return $this->belongsTo(ResultMethodKB::class);
    }
}

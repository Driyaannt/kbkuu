<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendedMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_reccomended',
        'result_method_kb_id',
    ];

    public function resultMethodKB()
    {
        return $this->belongsTo(ResultMethodKB::class);
    }
}

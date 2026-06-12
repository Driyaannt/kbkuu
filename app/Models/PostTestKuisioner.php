<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTestKuisioner extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'usia', 'jenis_kelamin', 'pendidikan', 'pekerjaan', 'jumlah_anak',
        'kb1', 'kb2', 'kb3', 'kb4', 'kb5', 'kb6', 'kb7', 'q1', 'q2', 'q3', 'q4',
        'q5', 'q6', 'action1', 'action2', 'action3', 'action4', 'action5', 'action6',
        'action7', 'action8', 'action9', 'action10', 'pengetahuan_percentage', 'pengetahuan_kategori',
        'sikap_percentage', 'sikap_kategori', 'tindakan_percentage', 'tindakan_kategori',
    ];

    // Jika menggunakan timestamps
    public $timestamps = true;
}

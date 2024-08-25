<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_krs';
    protected $table = 'krs';
    protected $fillable = ['id_mahasiswa', 'tingkat', 'semester', 'tahun_ajaran'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function mataKuliah() {
        return $this->belongsToMany(MataKuliah::class, 'krs_mata_kuliah', 'id_krs', 'id_mata_kuliah')->withTimestamps();
    }
}

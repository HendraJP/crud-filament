<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mata_kuliah';
    protected $table = 'mata_kuliah';
    protected $fillable = ['id_dosen', 'kode_mata_kuliah', 'mata_ajar', 'beban_sks'];

    public function dosen() {
        return $this->belongsTo(Dosen::class, 'id_mata_kuliah');
    }

    public function krs() {
        return $this->belongsToMany(Krs::class, 'krs_mata_kuliah', 'id_mata_kuliah', 'id_krs')->withTimestamps();
    }
}

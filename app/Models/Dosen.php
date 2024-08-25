<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dosen';
    protected $table = 'dosen';
    protected $fillable = ['nama'];

    public function mataKuliah() {
        return $this->hasMany(MataKuliah::class, 'id_mata_kuliah');
    }
}

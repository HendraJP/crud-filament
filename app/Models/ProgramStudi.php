<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_program_studi';
    protected $table = 'program_studi';
    protected $fillable = ['id_jurusan', 'nama'];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function mahasiswa() {
        return $this->hasMany(Mahasiswa::class, 'id_mahasiswa');
    }
}

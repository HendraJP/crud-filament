<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mahasiswa';
    protected $table = 'mahasiswa';
    protected $fillable = ['id_program_studi', 'nama', 'npm'];

    public function programStudi() {
        return $this->belongsTo(ProgramStudi::class, 'id_program_studi');
    }

    public function krs(){
        return $this->hasMany(Krs::class, 'id_krs');
    }
}

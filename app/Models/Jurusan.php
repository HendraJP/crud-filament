<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jurusan';
    protected $table = 'jurusan';
    protected $fillable = ['nama'];

    public function programStudi() {
        return $this->hasMany(ProgramStudi::class, 'id_program_studi');
    }
}

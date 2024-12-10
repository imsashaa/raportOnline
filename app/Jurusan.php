<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $fillable = [
        'nama'
    ];

    public function Kelas()
    {
        return $this->hasMany('App\Kelas', 'jurusan_id', 'id');
    }

    public function Kelas_Siswa()
    {
        return $this->hasMany('App\Kelas_Siswa', 'jurusan_id', 'id');
    }
}

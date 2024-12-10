<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = [
        'nilai','mapel_id','kelas_id','siswa_id','semester'
    ];


    public function Siswa()
    {
        return $this->belongsTo('App\Siswa', 'siswa_id', 'id');
    }

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id', 'id');
    }

    public function Mapel()
    {
        return $this->belongsTo('App\Mapel', 'mapel_id', 'id');
    }


}

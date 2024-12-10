<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas_Mapel extends Model
{
    protected $table = 'kelas_mapel';
    protected $fillable = [
        'kelas_id','mapel_id','kode_kelas_mapel'
    ];

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id', 'id');
    }

    public function Mapel()
    {
        return $this->belongsTo('App\Mapel', 'mapel_id', 'id');
    }




}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'kode_kelas','nama','nama_kelas','walikelas_id','jurusan_id'
    ];

    public function Walikelas()
    {
    	return $this->belongsTo('App\Walikelas');
    }

    public function Walikelas2()
    {
    	return $this->hasOne('App\Walikelas');
    }

    public function Kelas_Siswa()
    {
        return $this->hasMany('App\Kelas_Siswa', 'kelas_id', 'id');
    }

    public function Jurusan()
    {
    	return $this->belongsTo('App\Jurusan','jurusan_id','id');
    }

    public function Nilai()
    {
        return $this->hasMany('App\Nilai', 'nilai_id', 'id');
    }

    public function Kelas_Mapel()
    {
        return $this->hasMany('App\Kelas_Mapel', 'kelas_id', 'id');
    }


    // public function mapel() 
    // { 
    //     return $this->belongsToMany(Mapel::class,'kelas_mapel'); 
    // }
}

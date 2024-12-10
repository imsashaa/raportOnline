<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    protected $table = 'walikelas';
    protected $fillable = ['nama','nip','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','no_telp','alamat','avatar','user_id'];



    function getAvatar()
    {
    	if (!$this->avatar) 
    	{
    		return asset('images/default.png');
    	}

    	return asset('images/'.$this->avatar);


    }


    public function Kelas()
    {
    	return $this->hasMany('App\Kelas');
    }

    public function Kelas2()
    {
    	return $this->belongsTo('App\Kelas');
    }

    public function Kelas_Siswa()
    {
        return $this->hasMany('App\Kelas_Siswa', 'walikelas_id', 'id');
    }
}

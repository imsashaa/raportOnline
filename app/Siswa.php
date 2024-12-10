<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nama_belakang','nama_depan','jenis_kelamin','agama','alamat',
        'avatar','user_id','nis','tempat_lahir','tanggal_lahir','no_telp','nama_orangtua','pekerjaan_orangtua',
        'no_telp_orangtua','alamat_orangtua','nama_wali','pekerjaan_wali','no_telp_wali','alamat_wali'
    ];

    function getAvatar()
    {
    	if (!$this->avatar) 
    	{
    		return asset('images/default.png');
    	}

    	return asset('images/'.$this->avatar);


    }

    public function Mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai']);
    }


    public function Kelas_Siswa()
    {
        return $this->hasMany('App\Kelas_Siswa', 'siswa_id', 'id');
    }

    public function Nilai()
    {
        return $this->hasMany('App\Nilai', 'siswa_id', 'id');
    } 

    
}


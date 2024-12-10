<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['nama','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','no_telp','alamat','avatar','user_id'];



    function getAvatar()
    {
    	if (!$this->avatar) 
    	{
    		return asset('images/default.png');
    	}

    	return asset('images/'.$this->avatar);


    }
}

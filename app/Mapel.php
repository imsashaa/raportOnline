<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['kode','nama','semester','keterangan'];


   public function siswa()
   {
   	  return $this->belongsToMany(Siswa::class)->withPivot(['nilai']);
   }

   public function Nilai()
   {
       return $this->hasMany('App\Nilai', 'nilai_id', 'id');
   }

   public function Kelas_Mapel()
   {
       return $this->hasMany('App\Kelas_Mapel', 'mapel_id', 'id');
   }

   public function Kelas_Semester()
   {
       return $this->hasMany('App\Kelas_Semester', 'mapel_id', 'id');
   }

//    public function kelas()
//     {
//     	return $this->belongsToMany(Kelas::class, 'kelas_mapel');
//     }

}

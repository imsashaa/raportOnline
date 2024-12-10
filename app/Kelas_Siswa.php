<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas_Siswa extends Model
{

   protected $table = 'kelas_siswa';
   protected $fillable = [
       'kode_kelas_siswa','kelas_id','siswa_id','jurusan_id','walikelas_id'
   ];

   public function Walikelas()
   {
         return $this->belongsTo('App\Walikelas'); 
   }

   public function Kelas()
   {
         return $this->belongsTo('App\Kelas', 'kelas_id','id'); 
   }

   public function Siswa()
   {
         return $this->belongsTo('App\Siswa','siswa_id','id'); 
   }

   public function Jurusan()
   {
         return $this->belongsTo('App\Jurusan','jurusan_id','id'); 
   }
   



}

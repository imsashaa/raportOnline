<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas_Semester extends Model
{
    protected $table = 'kelas_semester';
    protected $fillable = [
        'mapel_id','semester'
    ]; 


    public function Mapel()
   {
       return $this->belongsTo('App\Mapel', 'mapel_id', 'id');
   }


    
}

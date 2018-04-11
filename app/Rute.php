<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    protected $table = 'rute';
     public $timestamps = false;

     public function transportation ()
     {
     	return $this->belongsTo('App\transportation');
     }

     public function transportation_type ()
     {
     	return $this->belongsTo('App\transportation_type' , 'transportation_typeid');
     }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
     public $timestamps = false;

     public function customer()
     {
     	return $this->belongsTo('App\customer' , 'customerid');
     }
     public function rute()
     {
     	return $this->belongsTo('App\rute' , 'rute_id' );
     }
     public function user(){
     	return $this->belongsTo('App\User' , 'userid');
     }
}

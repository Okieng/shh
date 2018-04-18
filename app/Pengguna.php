<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = [
        'name','address','phone','gender','user_id',
    ];
	
	
    public function Rute()
    {
        return $this->belongsTo('App\Rute','rute_id');
    }
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }
}

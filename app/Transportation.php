<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    protected $table = 'transportation';
    public $timestamps = false;

        public function transportation()
    {
        return $this->belongsTo('App\transportationtype');
    }
}


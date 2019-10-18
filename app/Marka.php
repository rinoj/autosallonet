<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
	public $table = 'marka';

    public function vetura(){
    	return $this->belongsTo('App\Vetura');
    }

    public function modelet(){
        return $this->hasMany('App\Modeli');
    }
}

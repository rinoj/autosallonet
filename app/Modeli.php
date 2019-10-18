<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modeli extends Model
{
	public $table = 'modeli';
    
    public function marka(){
    	return $this->belongsTo('App\Marka');
    }
}

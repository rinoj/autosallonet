<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vetura extends Model
{
    public $table = 'vetura';

    public function salloni(){
    	return $this->belongsTo('App\Salloni');
    }

    public function marka(){
    	return $this->belongsTo('App\Marka');
    }

    public function modeli(){
    	return $this->belongsTo('App\Modeli');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = 'images';
    
    public function vetura(){
    	return $this->belongsTo('App\Vetura');
    }
}

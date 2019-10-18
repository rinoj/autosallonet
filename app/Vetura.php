<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vetura extends Model
{
    public $table = 'veturat';

    public function salloni(){
    	return $this->belongsTo('App\Salloni');
    }
}

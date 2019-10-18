<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salloni extends Model
{
    public $table = 'salloni';

    public function veturat(){
        return $this->hasMany('App\Vetura');
    }
}

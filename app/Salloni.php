<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salloni extends Model
{
    public $table = 'salloni';

    public function veturat(){
        return $this->hasMany('App\Vetura');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function getVeturat(){
    	return $this->veturat()->where('rent', false)->get();
    }

    public function getRent(){
    	return $this->veturat()->where('rent', true)->get();
    }
}

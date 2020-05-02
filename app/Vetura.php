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

    public function canEdit($user)
    {
        return $this->salloni->user->id === $user->id;
    }

    public function emri(){
        return $this->marka->emri. ' '.$this->modeli->emri;
    }

    public function getMarshi(){
        if($this->marshi == 1)
            return 'Automatik';
        else
            return 'Manual';
    }
}

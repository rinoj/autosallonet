<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salloni;
use App\Vetura;
use App\User;
use Auth;
class PageController extends Controller
{
    public function admin(){
    	$user = Auth::user();
    	if($user->hasRole('admin')){
	    	$sallonet = Salloni::all();
	    	$veturat = Vetura::all();
	    	$users = User::all();

	    	return view('admin.home')
    			->withSallonet($sallonet)
    			->withVeturat($veturat)
    			->withUsers($users);
    	}
    	else{
    		$salloni = null;
    		if($user->salloni != null){
    			$salloni = $user->salloni;
    		}
    		$veturat = Vetura::where('salloni_id', $user->salloni->id)->get();
    		return view('admin.home')
    			->withVeturat($veturat)
    			->withSalloni($salloni);
    	}
    	
    }
}

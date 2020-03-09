<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vetura;
use App\Modeli;
use App\Marka;
use App\Salloni;
use Auth;
use App\Image;
use App\User;
use EloquentBuilder;
class PageController extends Controller
{
    public function index(Request $request)
    {
        $markat = Marka::all();
        $modelet = Modeli::all();

        $veturat = EloquentBuilder::to(
                    Vetura::class,
                    $request->all()
                 )->paginate(10);
        
        return view('index')
                ->withVeturat($veturat)
                ->withMarkat($markat)
                ->withModelet($modelet);
    }

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

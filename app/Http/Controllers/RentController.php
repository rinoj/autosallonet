<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marka;
use App\Modeli;
use App\Vetura;
use EloquentBuilder;
use Auth;

class RentController extends Controller
{
    public function index(Request $request)
    {   
        $vitet = array(); 
        for($i = 0; $i <= 20; $i++){
            $vitet[$i] = $i + 2000;
        }
        rsort($vitet, 2);
        $markat = Marka::all();
        $modelet = Modeli::all();

        $veturat = EloquentBuilder::to(
                    Vetura::class,
                    $request->all()
                 )->where('rent',true)->paginate(10);

        return view('pages.rent')
                ->withVeturat($veturat)
                ->withMarkat($markat)
                ->withModelet($modelet)
                ->withVitet($vitet);
    }

    public function admin(){
        $user = Auth::user();
        if($user->hasRole('admin')){
            $veturat = Vetura::where('rent', true)->paginate(10);
        }
        else{
            if($user->salloni != null){
                $veturat = Vetura::where('rent', true)->where('salloni_id', $user->salloni->id)->paginate(10);   
            }
            else{
                return redirect()->route('admin');
            }
        }
        return view('admin.veturat.index')->withVeturat($veturat);
    }
}

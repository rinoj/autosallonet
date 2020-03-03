<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salloni;
use App\Vetura;
use App\User;

class PageController extends Controller
{
    public function admin(){
    	$sallonet = Salloni::all();
    	$veturat = Vetura::all();
    	$users = User::all();
    	return view('admin.home')
    			->withSallonet($sallonet)
    			->withVeturat($veturat)
    			->withUsers($users);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vetura;
use App\Modeli;
use App\Marka;
use App\Salloni;
use Auth;
use App\Image;
use EloquentBuilder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('index');
    }
}

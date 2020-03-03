<?php

namespace App\Http\Controllers;

use App\Vetura;
use App\Modeli;
use App\Marka;
use Illuminate\Http\Request;
class VeturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veturat = Vetura::paginate(10);
        return view('pages.veturat')->withVeturat($veturat);
    }

    public function admin(){
        $veturat = Vetura::all();
        return view('admin.veturat.index')->withVeturat($veturat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $markat = Marka::all();
        $modelet = Modeli::all();
        $vitet = array(); 
        for($i = 0; $i <= 50; $i++){
            $vitet[$i] = $i + 1970;
        }
        rsort($vitet, 2);
        return view('admin.veturat.create')
                ->withMarkat($markat)
                ->withModelet($modelet)
                ->with('vitet', $vitet);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'viti'=>'required|max:40',
            'cmimi' => 'required',
            'ngjyra' => 'required',
            'km' => 'required',
            'kubikazha' => 'required'
        ]);

        $vetura = new Vetura();
        $vetura->km = $request->km;
        $vetura->cmimi = $request->cmimi;
        $vetura->ngjyra = $request->ngjyra;
        $vetura->kubikazha = $request->kubikazha;
        $vetura->viti = $request->viti;
        $vetura->marshi = $request->marshi;
        $vetura->lenda = $request->lenda;
        $vetura->marka_id = $request->marka;
        $vetura->modeli_id = $request->modeli;
        $vetura->salloni_id = 1;
        $vetura->save();

        return redirect()->route('admin.veturat')
            ->with('flash_message',
             'Vetura'. $vetura->marka->emri .' '.$vetura->modeli->emri.' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VeturaController  $veturaController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vetura = Vetura::find($id);
        return view('pages.vetura')->withVetura($vetura);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VeturaController  $veturaController
     * @return \Illuminate\Http\Response
     */
    public function edit(VeturaController $veturaController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VeturaController  $veturaController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VeturaController $veturaController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VeturaController  $veturaController
     * @return \Illuminate\Http\Response
     */
    public function destroy(VeturaController $veturaController)
    {
        //
    }
}

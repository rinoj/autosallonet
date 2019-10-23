<?php

namespace App\Http\Controllers;

use App\Vetura;
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
        $veturat = Vetura::all();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

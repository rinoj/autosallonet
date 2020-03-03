<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salloni;
use App\Vetura;
class SalloniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sallonet = Salloni::all();
        return view('pages.sallonet')
                ->withSallonet($sallonet);
    }

    public function admin(){
        $sallonet = Salloni::all();
        return view('admin.salloni.index')
                ->withSallonet($sallonet);
    }


    public function veturat($id){
        $salloni = Salloni::find($id);
        $veturat = Vetura::where('salloni_id', $salloni->id)->orderBy('id', 'desc')->paginate(20);
        return view('admin.salloni.veturat')
                ->withSalloni($salloni)
                ->withVeturat($veturat);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

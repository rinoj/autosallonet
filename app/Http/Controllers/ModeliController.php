<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeli;
use App\Marka;
class ModeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $modelet = Modeli::all();
        return view('admin.modeli.index')->withModelet($modelet);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $markat = Marka::all();
        return view('admin.modeli.create')->withMarkat($markat);
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
            'emri'=>'required|max:40',
        ]);
        $name = $request['emri'];
        $modeli = new Modeli();
        $modeli->emri = $name;
        $modeli->marka_id = $request->input('marka');
        $modeli->save();
        
        return redirect()->route('admin.modeli')
            ->with('flash_message',
             'Modeli '. $modeli->emri.' added!');
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


    public function getModelet($id){
        $marka = Marka::where('emri', $id)->firstOrFail();

        $modelet = Modeli::where('marka_id', $marka->id)->get();

        return response()->json($modelet);
    }

    public function getModeletById($id){
        $marka = Marka::where('id', $id)->firstOrFail();

        $modelet = Modeli::where('marka_id', $marka->id)->get();

        return response()->json($modelet);
    }
}

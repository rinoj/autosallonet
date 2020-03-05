<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salloni;
use App\Vetura;
use App\User;
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
        $users = User::all();

        return view('admin.salloni.create')->withUsers($users);
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
            'telefoni' => 'required',
            'adresa' => 'required'
        ]);

        $salloni = new Salloni();
        $salloni->emri = $request->emri;
        $salloni->telefoni = $request->telefoni;
        $salloni->adresa = $request->adresa;
        $salloni->user_id = $request->user;
        $salloni->save();

        return redirect()->route('admin.sallonet')
            ->with('flash_message',
             'Salloni '.$salloni->emri. ' eshte shtuar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salloni = Salloni::findOrFail($id);

        return view('pages.salloni')->withSalloni($salloni);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $salloni = Salloni::findOrFail($id);
        return view('admin.salloni.edit')->withUsers($users)->withSalloni($salloni);
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
        $this->validate($request, [
            'emri'=>'required|max:40',
            'telefoni' => 'required',
            'adresa' => 'required'
        ]);

        $salloni = Salloni::findOrFail($id);
        $salloni->emri = $request->emri;
        $salloni->telefoni = $request->telefoni;
        $salloni->adresa = $request->adresa;
        $salloni->user_id = $request->user;
        $salloni->update();

        return redirect()->route('admin.sallonet')
            ->with('flash_message',
             'Salloni '.$salloni->emri. ' eshte edituar!');
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

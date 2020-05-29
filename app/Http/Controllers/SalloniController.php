<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salloni;
use App\Vetura;
use App\User;
use App\Marka;
use App\Modeli;
use EloquentBuilder;
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
        $veturat = Vetura::where('salloni_id', $salloni->id)->where('rent', false)->orderBy('id', 'desc')->paginate(20);
        return view('admin.salloni.veturat')
                ->withSalloni($salloni)
                ->withVeturat($veturat);
    }

    public function rent($id){
        $salloni = Salloni::find($id);
        $veturat = Vetura::where('salloni_id', $salloni->id)->where('rent', true)->orderBy('id', 'desc')->paginate(20);
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
            'adresa' => 'required',
            'slug' => 'required|unique:salloni'
        ]);

        $salloni = new Salloni();
        $salloni->emri = $request->emri;
        $salloni->telefoni = $request->telefoni;
        $salloni->adresa = $request->adresa;
        $salloni->user_id = $request->user;
        $salloni->facebook = $request->facebook;
        $salloni->slug = $request->slug;
        $salloni->lat = $request->lat;
        $salloni->long = $request->long;
        $salloni->metadescription = $request->metadescription;
        $salloni->lloji = $request->lloji;
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
    public function show($autosalloni)
    {
        $salloni = Salloni::where('slug', $autosalloni)->firstOrFail();

        return view('pages.salloni')->withSalloni($salloni);
    }

    public function showveturat($autosalloni, Request $request)
    {
        $vitet = array(); 
        for($i = 0; $i <= 20; $i++){
            $vitet[$i] = $i + 2000;
        }
        rsort($vitet, 2);

        $modelet = Modeli::all();
        $markat = Marka::all();
        $salloni = Salloni::where('slug', $autosalloni)->firstOrFail();
        $veturat = EloquentBuilder::to(
                    Vetura::class,
                    $request->all()
                 )->where('salloni_id', $salloni->id)->where('rent',false)->paginate(10);
        return view('pages.veturat')->withSalloni($salloni)
                ->withVeturat($veturat)
                ->withMarkat($markat)
                ->withModelet($modelet)
                ->withVitet($vitet);
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
            'adresa' => 'required',
            'slug' => 'required|unique:salloni,slug,'.$id,
        ]);

        $salloni = Salloni::findOrFail($id);
        $salloni->emri = $request->emri;
        $salloni->telefoni = $request->telefoni;
        $salloni->adresa = $request->adresa;
        $salloni->user_id = $request->user;
        $salloni->facebook = $request->facebook;
        $salloni->slug = $request->slug;
        $salloni->lat = $request->lat;
        $salloni->long = $request->long;
        $salloni->metadescription = $request->metadescription;
        $salloni->lloji = $request->lloji;
        $salloni->update();
        if($salloni->lloji == 'Sallonrent'){
            $salloni->user->syncPermissions(['manage-rent', 'manage-veturat']);
        }
        elseif($salloni->lloji == 'Rent'){
            $salloni->user->syncPermissions(['manage-rent']);
            $salloni->user->revokePermissionTo(['manage-veturat']);
        }else{
            $salloni->user->syncPermissions(['manage-veturat']);
            $salloni->user->revokePermissionTo(['manage-rent']);
        }
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

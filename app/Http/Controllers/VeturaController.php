<?php

namespace App\Http\Controllers;

use App\Vetura;
use App\Modeli;
use App\Marka;
use App\Salloni;
use Auth;
use App\Image;
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
        $user = Auth::user();
        if($user->hasRole('admin')){
            $veturat = Vetura::paginate(10);
        }
        else{
            if($user->salloni != null){
                $veturat = Vetura::where('salloni_id', $user->salloni->id)->paginate(10);   
            }
            else{
                return redirect()->route('admin');
            }
        }
        return view('admin.veturat.index')->withVeturat($veturat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user->salloni == null)
            return redirect()->route('admin');
        $sallonet = Salloni::all();
        $markat = Marka::all();
        $modelet = Modeli::all();
        $vitet = array(); 
        for($i = 0; $i <= 50; $i++){
            $vitet[$i] = $i + 1970;
        }
        rsort($vitet, 2);
        return view('admin.veturat.create')
                ->withSallonet($sallonet)
                ->withMarkat($markat)
                ->withModelet($modelet)
                ->with('vitet', $vitet)
                ->withUser($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'viti'=>'required|max:40',
            'cmimi' => 'required',
            'ngjyra' => 'required',
            'km' => 'required',
            'kubikazha' => 'required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
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
        if($user->hasRole('admin')){
            $vetura->salloni_id = $request->salloni;
        }else{
            $vetura->salloni_id = $user->salloni->id;
        }
        $vetura->save();

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $img)
            {
                $date = Date('d-m-Y');
                $name = $date.'-'.$img->getClientOriginalName();

                $image = new Image();
                $image->filename= $name;
                $image->vetura_id = $vetura->id;
                $image->save();

                $img->move(public_path().'/images/veturat/', $name);  
            }
        }

        return redirect()->route('admin.veturat')
            ->with('flash_message',
             'Vetura'. $vetura->marka->emri .' '.$vetura->modeli->emri.' added!');
    }

    public function uploadImage($id, Request $request){

        $vetura = Vetura::find($id);
        $user = Auth::user();
        if($vetura->canEdit($user)){
            if($request->hasfile('filename'))
            {
                foreach($request->file('filename') as $img)
                {
                    $date = Date('d-m-Y');
                    $name = $date.'-'.$img->getClientOriginalName();

                    $image = new Image();
                    $image->filename= $name;
                    $image->vetura_id = $vetura->id;
                    $image->save();

                    $img->move(public_path().'/images/veturat/', $name);  
                    
                }
            }
        }
        return redirect()->back();
    }

    public function deleteImage($id){
        $image = Image::find($id);
        $vetura = $image->vetura;
        $user = Auth::user();
        if($vetura->canEdit($user)){
            $image_path = public_path()."/images/veturat/".$image->filename; 
            if (file_exists($image_path)) {
               unlink($image_path);
            }
            $image->delete();
        }
        return redirect()->back();
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

    public function showadmin($id)
    {
        $user = Auth::user();
        if($user->salloni == null)
            return redirect()->route('admin');
        if($user->hasRole('admin')){
            $vetura = Vetura::find($id);
        }
        else{
            $vetura = Vetura::find($id);
            if(!$vetura->canEdit($user)){
                return redirect()->route('admin');
            }
        }
        return view('admin.veturat.show')->withVetura($vetura);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VeturaController  $veturaController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sallonet = Salloni::all();
        $vetura = Vetura::findOrFail($id);
        $user = Auth::user();
        if($user->hasRole('admin')){
            $vetura = Vetura::find($id);
        }
        else{
            $vetura = Vetura::find($id);
            if(!$vetura->canEdit($user)){
                return redirect()->route('admin');
            }
        }
        $markat = Marka::all();
        $modelet = Modeli::all();
        $vitet = array();
        for($i = 0; $i <= 50; $i++){
            $vitet[$i] = $i + 1970;
        }
        // dd($vetura);
        rsort($vitet, 2);
        return view('admin.veturat.edit')
                ->withSallonet($sallonet)
                ->withMarkat($markat)
                ->withModelet($modelet)
                ->with('vitet', $vitet)
                ->withVetura($vetura)
                ->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VeturaController  $veturaController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $this->validate($request, [
            'viti'=>'required|max:40',
            'cmimi' => 'required',
            'ngjyra' => 'required',
            'km' => 'required',
            'kubikazha' => 'required',
        ]);

        $vetura = Vetura::findOrFail($id);
        $vetura->km = $request->km;
        $vetura->cmimi = $request->cmimi;
        $vetura->ngjyra = $request->ngjyra;
        $vetura->kubikazha = $request->kubikazha;
        $vetura->viti = $request->viti;
        $vetura->marshi = $request->marshi;
        $vetura->lenda = $request->lenda;
        $vetura->marka_id = $request->marka;
        $vetura->modeli_id = $request->modeli;
        if($user->hasRole('admin')){
            $vetura->salloni_id = $request->salloni;
        }
        $vetura->update();


        return redirect()->route('admin.veturat')
            ->with('flash_message',
             'Vetura'. $vetura->marka->emri .' '.$vetura->modeli->emri.' eshte edituar me sukses!');
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

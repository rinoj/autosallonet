@extends('adminlte::page')

@section('title', 'Krijo Veturen')

@section('content_header')
    <h1>Krijo Veturen</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxcontent')

    
    <div class='col-lg-12'>


    {{ Form::open(array('route' => 'admin.veturat.store', 'enctype' => 'multipart/form-data')) }}

    <div class="form-group">
        {{ Form::label('marka', 'Marka') }}
        <select class="form-control e1" name="marka">
        	@foreach($markat as $marka)
        	<option value="{{$marka->id}}">{{$marka->emri}}</option>
        	@endforeach
        </select>
    </div>
    
    <div class="form-group">
        {{ Form::label('name', 'Modeli') }}
        <select class="form-control e1" name="modeli">
        	@foreach($modelet as $modeli)
        	<option value="{{$modeli->id}}">{{$modeli->emri}}</option>
        	@endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('viti', 'Viti') }}
        <select class="form-control" name="viti">
        	@foreach($vitet as $viti)
        		<option value="{{$viti}}">{{$viti}}</option>
        	@endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('km', 'Kilometrazha') }}
        {{ Form::text('km', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('kubikazha', 'Madhesia e Motorrit') }}
        {{ Form::text('kubikazha', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lenda', 'Lenda Djegese') }}
        <select class="form-control" name="lenda">
        	<option value="Diesel">Diesel</option>
        	<option value="Benzin">Benzin</option>
        	<option value="Elektrik">Elektrik</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('ngjyra', 'Ngjyra') }}
        {{ Form::text('ngjyra', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('interier', 'Interieri') }}
        {{ Form::text('interier', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Marshi', 'Marshi') }}
        <select class="form-control" name="marshi">
        	<option value="Automatik">Automatik</option>
        	<option value="Manual">Manual</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('Cmimi', 'Cmimi') }}
        {{ Form::text('cmimi', '', array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('dyer', 'Dyer') }}
        {{ Form::text('dyer', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('doganuar', 'I doganuar') }}
         <select class="form-control" name="doganuar">
                <option value="1">Po</option>
                <option value="0">Jo</option>
        </select>
    </div>

    @if($user->hasRole('admin'))
    <div class="form-group">
        {{ Form::label('salloni', 'Zgjedh Sallonin') }}
         <select     class="form-control e1" name="salloni">
            @foreach($sallonet as $salloni)
                <option value="{{$salloni->id}}">{{$salloni->emri}}</option>
            @endforeach
        </select>
    </div>
    @endif
    <div class="form-group">
        {{ Form::label('Foto', 'Foto') }}
    	<input type="file" name="filename[]" class="form-control" multiple>
        
    </div>


    {{ Form::submit('Ruaj', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
    @endsection

    @section('boxtitle')
    <a href="{{ route('admin.veturat') }}" class="btn btn-default"><i class="fa fa-angle-left"></i> Kthehu</a>
    @endsection
    @include('layouts.box')
    </div>
</div>
@endsection

@section('js')
 <script>
       $(".e1").select2({
    placeholder: "Select a State"
});
    </script>
@endsection
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


    {{ Form::open(array('route' => 'admin.veturat.store')) }}

    <div class="form-group">
        {{ Form::label('marka', 'Marka') }}
        <select class="form-control" name="marka">
        	@foreach($markat as $marka)
        	<option value="{{$marka->id}}">{{$marka->emri}}</option>
        	@endforeach
        </select>
    </div>
    
    <div class="form-group">
        {{ Form::label('name', 'Modeli') }}
        <select class="form-control" name="modeli">
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
        	<option value="diesel">Diesel</option>
        	<option value="benzin">Benzin</option>
        	<option value="Elektrik">Elektrik</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('ngjyra', 'Ngjyra') }}
        {{ Form::text('ngjyra', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Marshi', 'Marshi') }}
        <select class="form-control" name="marshi">
        	<option value="automatik">Automatik</option>
        	<option value="manual">Manual</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('Cmimi', 'Cmimi') }}
        {{ Form::text('cmimi', '', array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Ruaj', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
    @endsection

    @section('boxtitle')
    <a href="{{ route('admin.veturat') }}" class="btn btn-default ">Kthehu</a>
    @endsection
    @include('layouts.box')
    </div>
</div>
@endsection
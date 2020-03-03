@extends('adminlte::page')

@section('title', 'Krijo Modelin')

@section('content_header')
    <h1>Add Permission</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxcontent')

    
    <div class='col-lg-12'>


    {{ Form::open(array('route' => 'admin.modeli.store')) }}

    <div class="form-group">
        {{ Form::label('name', 'Emri i Modelit') }}
        {{ Form::text('emri', '', array('class' => 'form-control')) }}
    </div><br>

    <div class="form-group">
        {{ Form::label('name', 'Marka') }}
        <select class="form-control" name="marka">
        	@foreach($markat as $marka)
        	<option value="{{$marka->id}}">{{$marka->emri}}</option>
        	@endforeach
        </select>
    </div><br>
    
    <br>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
    @endsection

    @section('boxtitle')
    <a href="{{ route('admin.markat.create') }}" class="btn btn-success">Shto Marken</a>
    @endsection
    @include('layouts.box')
    </div>
</div>
@endsection
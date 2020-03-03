@extends('adminlte::page')

@section('title', 'Add Permission')

@section('content_header')
    <h1>Add Permission</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxcontent')

    
    <div class='col-lg-12'>


    {{ Form::open(array('route' => 'admin.markat.store')) }}

    <div class="form-group">
        {{ Form::label('name', 'Emri i Markes') }}
        {{ Form::text('emri', '', array('class' => 'form-control')) }}
    </div><br>
    
    <br>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
    @endsection

    @section('boxtitle')
    <a href="{{ route('admin.modeli.create') }}" class="btn btn-success">Shto Modelin</a>
    @endsection
    @include('layouts.box')
    </div>
</div>
@endsection
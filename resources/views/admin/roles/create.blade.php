@extends('adminlte::page')

@section('title', 'Add Role')

@section('content_header')
    <h1>Add Roles</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxcontent')

    
    <div class="col-md-12">
    {{ Form::open(array('url' => 'roles')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

    </div>  
    @endsection

    @section('boxtitle')
    <a href="{{ URL::to('roles') }}" class="btn btn-success">Roles</a>
    @endsection
    @include('layouts.box')
    </div>
</div>
@endsection
@extends('adminlte::page')

@section('title', 'Edit Permission')

@section('content_header')
    <h1>Edit Permission</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxtitle')
    	Edit {{$permission->name}}
    @endsection
    @section('boxtitleright')
    <a href="{{ URL::to('permissions') }}" class="btn btn-success">Permissions</a>
    @endsection
    @section('boxcontent')

    
   <div class='col-lg-12'>
    <br>
    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

    <div class="form-group">
        {{ Form::label('name', 'Permission Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

    @endsection

    @section('boxfooter')
    @endsection
    @include('layouts.box')
    </div>
</div>
@endsection
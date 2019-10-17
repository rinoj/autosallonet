@extends('adminlte::page')

@section('title', 'Edit Role')

@section('content_header')
    <h1>Edit Permission</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    
    @section('boxcontent')
    @section('boxtitle')
        Edit {{$role->name}}
    @endsection
    
    @section('boxtitleright')
    <a href="{{ URL::to('admin/roles') }}" class="btn btn-success">Roles</a>
    @endsection
    <div class='col-lg-12 '>

        {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Role Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <h5><b>Assign Permissions</b></h5>
        @foreach ($permissions as $permission)

            {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
            {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
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
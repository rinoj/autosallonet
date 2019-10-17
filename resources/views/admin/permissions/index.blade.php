@extends('adminlte::page')

@section('title', 'Permissions')

@section('boxtitle')
    Permissions
@stop
@section('content')

<div class="row">
	<div class="col-md-12">
	@section('boxcontent')
    <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td> 
                    <td>
                    <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
	@endsection

	@section('boxtitleright')
    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>
    <a href="{{ route('roles.index') }}" class="btn btn-default">Roles</a></h1>
	@endsection
	@include('layouts.box')
	</div>
</div>
@endsection
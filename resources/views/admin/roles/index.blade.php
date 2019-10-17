@extends('adminlte::page')

@section('title', 'Roles')


@section('content')
@section('boxtitle')
    Roles
@stop
<div class="row">
	<div class="col-md-12">
	@section('boxcontent')
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th width="25%">Role Name</th>
    			<th width="25%">Can</th>
                <th width="25%">Users</th>
                <th width="25%">Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                        @foreach($role->users as $user)
                            <span class="label label-default label-xs">{{$user->name}}</span>
                        @endforeach
                    </td>
                    <td>
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
    	</tbody>
    </table>
	@endsection

	@section('boxtitleright')
    <a href="{{ route('roles.create') }}" class="btn btn-success">Add Role</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default">Permissions</a></h1>
	@endsection
	@include('layouts.box')
	</div>
</div>
@endsection
@extends('adminlte::page')

@section('title', 'Create User')

@section('boxtitle')
    Create User
@stop
@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		@section('boxcontent')
		    
		   
<form method="post" action="{{ route('users.store') }}">

        @csrf
		    	
		    	
				<div class="form-group text-left {{ $errors->has('name') ? 'has-error' : '' }}">
					<label>Name:</label>
	                {!! Form::text('name', null,['class' => 'form-control']) !!}
	                @if ($errors->has('name'))
			            <span class="help-block">
			                <strong>{{ $errors->first('name') }}</strong>
			            </span>
			        @endif
				</div>

				<div class="form-group text-left {{ $errors->has('email') ? 'has-error' : '' }}">
					<label>Email:</label>
	                {!! Form::email('email', null,['class' => 'form-control']) !!}
	                @if ($errors->has('email'))
			            <span class="help-block">
			                <strong>{{ $errors->first('email') }}</strong>
			            </span>
			        @endif
				</div>

				<div class="form-group text-left {{ $errors->has('password') ? 'has-error' : '' }}">
					<label>Password:</label>
	                {!! Form::text('password', null,['class' => 'form-control']) !!}
	                @if ($errors->has('password'))
			            <span class="help-block">
			                <strong>{{ $errors->first('password') }}</strong>
			            </span>
			        @endif
				</div>

				

				<div class='form-group'>
					<label>Role:</label>
					<br>
			        @foreach ($roles as $role)
							<input type="checkbox" name="roles[]" value="{{ $role->id }}">
						    
						    <div class="btn-group">
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
										{{ ucfirst($role->name) }} <span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu">
										<li class="danger"><a href="{{  route('roles.edit', $role->id) }}">Edit Role</a></li>
									</ul>
								</div>
							</div>

					@endforeach
			    </div>

				<a href="{{route('users.index')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Go Back</a>
				<button class="btn btn-primary " type="submit"><span class="glyphicon glyphicon-ok"></span> Create</button>
	    {!! Form::close()!!}

		@endsection

		@section('boxfooter')

		@endsection
		@include('layouts.box')
	</div>
</div>
@endsection
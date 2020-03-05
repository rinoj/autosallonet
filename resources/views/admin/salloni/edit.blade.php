@extends('adminlte::page')

@section('title', 'Edito Sallonin')

@section('content_header')
    <h1>Edito Sallonin</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxcontent')

    
    <div class='col-lg-12'>


    {{ Form::open(array('route' => ['admin.sallonet.update', $salloni->id])) }}

    
    <div class="form-group">
        {{ Form::label('emri', 'Emri i Auto Sallonit') }}
        {{ Form::text('emri', $salloni->emri, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('telefoni', 'Telefoni') }}
        {{ Form::text('telefoni', $salloni->telefoni, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('adresa', 'Adresa') }}
        {{ Form::text('adresa', $salloni->adresa, array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('user', 'Zgjedh pronarin') }}
         <select id="e1" class="form-control" name="user">
         	@foreach($users as $user)
		        <option value="{{$user->id}}" {{$salloni->user_id == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
		    @endforeach
	    </select>
    </div>


    {{ Form::submit('Ruaj', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
    @endsection

    @section('boxtitle')
    <a href="{{ route('admin.sallonet') }}" class="btn btn-default"><i class="fa fa-angle-left"></i> Kthehu</a>
    @endsection
    @include('layouts.box')
    </div>
</div>

@endsection

@section('js')
 <script>
       $("#e1").select2({
    placeholder: "Select a State"
});
    </script>
@endsection
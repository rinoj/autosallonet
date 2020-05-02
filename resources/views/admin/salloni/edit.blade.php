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
        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', $salloni->slug, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('facebook', 'Faqja e Facebook') }}
        {{ Form::text('facebook', $salloni->facebook, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('meta', 'Meta Description') }}
        {{ Form::textarea('metadescription', $salloni->metadescription, array('class' => 'form-control', 'rows' => 3, 'style' => 'resize:none')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lloji', 'Zgjedh llojin') }}
         <select  class="form-control" name="lloji">
                <option value="Sallon" {{$salloni->lloji == 'Sallon' ? 'selected' : ''}}>Sallon</option>
                <option value="Rent" {{$salloni->lloji == 'Rent' ? 'selected' : ''}}>Rent</option>
                <option value="Sallonrent" {{$salloni->lloji == 'Sallonrent' ? 'selected' : ''}}>Sallon & Rent</option>
        </select>
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
    <a href="{{ URL::previous() }}" class="btn btn-default"><i class="fa fa-angle-left"></i> Kthehu</a>
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
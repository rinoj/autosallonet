@extends('adminlte::page')

@section('title', 'Vetura')

@section('content_header')
    <h1>Shfaq Veturen</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    @section('boxcontent')

    
    <div class='col-lg-12'>

    	@foreach($vetura->images as $image)
    		<img src="{{url('images/veturat/'. $image->filename)}}">
    	@endforeach


	</div>
    @endsection

    @section('boxtitle')
    <a href="{{ route('admin.veturat') }}" class="btn btn-default ">Kthehu</a>
    @endsection
    @include('layouts.box')
    </div>
</div>
@endsection
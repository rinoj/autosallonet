@extends('adminlte::page')

@section('title', 'Krijo Sallonin')

@section('adminhead')
@mapstyles
@endsection

@section('adminlte_js')
@mapscripts
<script>
	window.addEventListener('LaravelMaps:MapInitialized', function (event) {
		var element = event.detail.element;
		var map = event.detail.map;
		var marker = event.detail.marker;
		var service = event.detail.service;
		
		// 	draggable: true
		var marker1;
		map.on('click', function(e) {
			if (marker1) { // check
				map.removeLayer(marker1); // remove
			}
			console.log("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng);
			document.getElementById("latitude").value = e.latlng.lat;
			document.getElementById("longitude").value = e.latlng.lng;
			marker1 = L.marker(e.latlng).addTo(map);
		});
	});
	
</script>
@endsection

@section('content_header')
    <h1>Krijo Sallonin</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxcontent')

    
    <div class='col-lg-12'>


    {{ Form::open(array('route' => 'admin.sallonet.store')) }}

    <div class="form-group">
        {{ Form::label('emri', 'Emri i Auto Sallonit') }}
        {{ Form::text('emri', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('telefoni', 'Telefoni') }}
        {{ Form::text('telefoni', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('adresa', 'Adresa') }}
        {{ Form::text('adresa', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('facebook', 'Faqja e Facebook') }}
        {{ Form::text('facebook', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('meta', 'Meta Description') }}
        {{ Form::textarea('metadescription', null, array('class' => 'form-control', 'rows' => 3, 'style' => 'resize:none')) }}
    </div>
    

    <div class="form-group">
        {{ Form::label('lloji', 'Zgjedh llojin') }}
         <select class="form-control" name="lloji">
                <option value="Sallon">Sallon</option>
                <option value="Rent">Rent</option>
                <option value="Sallonrent">Sallon & Rent</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('user', 'Zgjedh pronarin') }}
         <select id="e1" class="form-control" name="user">
         	@foreach($users as $user)
		        <option value="{{$user->id}}">{{$user->name}}</option>
		    @endforeach
	    </select>
    </div>

    <div class="form-group">
        {{ Form::label('meta', 'Lokacioni i Sallonit') }}
            @map([
				'lat' => 42.61898,
				'lng' => 21.0257423,
				'zoom' => 8,
			])
        
		<input type="hidden" class="form-control" id="latitude" name="lat">
		<input type="hidden" class="form-control" id="longitude" name="long">
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
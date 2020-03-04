@extends('adminlte::page')

@section('title', 'Sallonet')


@section('content')
@section('boxtitle')
    Sallonet
@stop
<div class="row">
	<div class="col-md-10 col-md-offset-1">
	@section('boxcontent')
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th>ID</th>
    			<th>Emri</th>
    			<th>Telefoni</th>
                <th>Adresa</th>
                <th>Emri i Pronarit</th>
                <th>NR. i veturave</th>
                <th></th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($sallonet as $salloni)
                <tr>
                	<td>{{$salloni->id}}</td>
                    <td>{{$salloni->emri}}</td>
                    <td>{{$salloni->telefoni}}</td>
                    <td>{{$salloni->adresa}}</td>
                    <td>{{$salloni->user->name}}</td>
                    <td>{{$salloni->veturat->count()}}</td>
                    <td><a href="{{route('admin.sallonet.veturat', $salloni->id)}}" class="btn btn-info"><i class="fa fa-car"></i> Veturat</a></td>
                </tr>
                @endforeach
    	</tbody>
    </table>
	@endsection

	@section('boxtitleright')
    <a href="{{ route('roles.create') }}" class="btn btn-default"><i class="fa fa-plus"></i> Shto Sallonin</a>
	@endsection
	@include('layouts.box')
	</div>
</div>
@endsection
@extends('adminlte::page')

@section('title', 'Sallonet')


@section('content')
@section('boxtitle')
    Sallonet
@stop
<div class="row">
	<div class="col-md-10 col-md-offset-1">
	@section('boxcontent')
    <div class="table-responsive">
        <table class="table table-bordered">
        	<thead>
        		<tr>
        			<th>ID</th>
        			<th>Emri</th>
                    <th>Lloji</th>
        			<th>Telefoni</th>
                    <th>Adresa</th>
                    <th>Emri i Pronarit</th>
                    <th>Vetura</th>
                    <th>Rent</th>
                    <th></th>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach ($sallonet as $salloni)
                    <tr>
                    	<td>{{$salloni->id}}</td>
                        <td>{{$salloni->emri}}</td>
                        <td>{{$salloni->lloji}}</td>
                        <td>{{$salloni->telefoni}}</td>
                        <td>{{$salloni->adresa}}</td>
                        <td><a href="{{url('admin/users', $salloni->user->id)}}/edit" class="btn btn-default btn-sm"><i class="fa fa-edit"></i> {{$salloni->user->name}}</a></td>
                        <td>{{$salloni->getVeturat()->count()}}</td>
                        <td>{{$salloni->getRent()->count()}}</td>
                        <td>
                            <a href="{{route('admin.sallonet.edit', $salloni->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edito</a>
                            @if($salloni->lloji == 'Sallon' || $salloni->lloji == 'Sallonrent')
                            <a href="{{route('admin.sallonet.veturat', $salloni->id)}}" class="btn btn-sm btn-default"><i class="fa fa-car"></i> Veturat</a>
                            @endif
                            @if($salloni->lloji == 'Rent' || $salloni->lloji == 'Sallonrent')
                            <a href="{{route('admin.sallonet.rent', $salloni->id)}}" class="btn btn-sm btn-default"><i class="fa fa-car"></i> Rent</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
        	</tbody>
        </table>
    </div>
	@endsection

	@section('boxtitleright')
    <a href="{{ route('admin.sallonet.create') }}" class="btn btn-default"><i class="fa fa-plus"></i> Shto Sallonin</a>
	@endsection
	@include('layouts.box')
	</div>
</div>
@endsection
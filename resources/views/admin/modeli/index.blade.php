@extends('adminlte::page')

@section('title', 'Modeli')


@section('content')
@section('boxtitle')
    Markat
@stop
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	@section('boxcontent')
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th>ID</th>
    			<th>Modeli</th>
    			<th>Marka</th>
                <th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($modelet as $modeli)
                <tr>
                	<td>{{$modeli->id}}</td>
                    <td>{{$modeli->emri}}</td>
                    <td>{{$modeli->marka->emri}}</td>
                    <td></td>
                </tr>
                @endforeach
    	</tbody>
    </table>
	@endsection

	@section('boxtitleright')
    <a href="{{ route('admin.modeli.create') }}" class="btn btn-success">Shto Modelin</a>
    <a href="{{ route('admin.markat.create') }}" class="btn btn-default">Shto Marken</a></h1>
	@endsection
	@include('layouts.box')
	</div>
</div>
@endsection
@extends('adminlte::page')

@section('title', 'Veturat')


@section('content')
@section('boxtitle')
    Veturat
@stop
<div class="row">
	<div class="col-md-10 col-md-offset-1">
	@section('boxcontent')
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th>ID</th>
    			<th>Marka</th>
    			<th>Modeli</th>
                <th>Auto Salloni</th>
                <th>Viti</th>
                <th></th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($veturat as $vetura)
                <tr>
                	<td>{{$vetura->id}}</td>
                    <td>{{$vetura->marka->emri}}</td>
                    <td>{{$vetura->modeli->emri}}</td>
                    <td>{{$vetura->salloni->emri}}</td>
                    <td>{{$vetura->viti}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Edito</a>
                    </td>
                </tr>
                @endforeach
    	</tbody>
    </table>
	@endsection

	@section('boxtitleright')
    <a href="{{ route('roles.create') }}" class="btn btn-success">Shto Veturen</a>
	@endsection
	@include('layouts.box')
	</div>
</div>
@endsection
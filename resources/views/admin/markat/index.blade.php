@extends('adminlte::page')

@section('title', 'Markat')


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
    			<th>Marka</th>
    			<th>Modelet</th>
                <th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($markat as $marka)
                <tr>
                	<td>{{$marka->id}}</td>
                    <td>{{$marka->emri}}</td>
                    <td>{{$marka->modelet->count()}}</td>
                    <td></td>
                </tr>
                @endforeach
    	</tbody>
    </table>
	@endsection

	@section('boxtitleright')
    <a href="{{ route('roles.create') }}" class="btn btn-success">Shto Marken</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default">Shto Model</a></h1>
	@endsection
	@include('layouts.box')
	</div>
</div>
@endsection
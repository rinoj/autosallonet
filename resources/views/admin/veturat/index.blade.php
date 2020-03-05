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
                <th>Fotografi</th>
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
                    <td>{{$vetura->images->count()}}</td>
                    <td>
                        <a href="{{route('admin.veturat.edit', $vetura->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edito</a>
                        <a href="{{route('admin.veturat.show', $vetura->id)}}" class="btn btn-sm btn-info"><i class="fa fa-images"></i> Fotot</a>
                        <a href="{{route('showvetura', $vetura->id)}}" class="btn btn-sm btn-default" target="_blank"><i class="fa fa-link"></i> Shfaq veturen</a>
                    </td>
                </tr>
                @endforeach
    	</tbody>
    </table>
    <div class="text-center">
        {{$veturat->links()}}
    </div>
	@endsection

	@section('boxtitleright')
    <a href="{{ route('admin.veturat.create') }}" class="btn btn-default"><i class="fa fa-plus"></i> Shto Veturen</a>
	@endsection
	@include('layouts.box')
	</div>
</div>
@endsection
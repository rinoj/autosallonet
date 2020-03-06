@extends('adminlte::page')

@section('title', 'Veturat e '.$salloni->emri)


@section('content')
@section('boxtitle')
    Veturat e {{$salloni->emri}}
@stop
<div class="row">
    <div class="col-md-4">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-default"><i class="fa fa-building"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">{{$salloni->adresa}}</span>
            <span class="info-box-number">{{$salloni->emri}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-default"><i class="fa fa-phone"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">{{$salloni->user->name}}</span>
            <span class="info-box-number">{{$salloni->telefoni}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-default"><i class="fa fa-car"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Veturat</span>
            <span class="info-box-number">{{$salloni->veturat->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
    </div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
	@section('boxcontent')
    <div class="table-responsive">
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
                          <a href="{{route('showvetura', [$vetura->salloni->slug, $vetura->slug])}}" class="btn btn-sm btn-default" target="_blank"><i class="fa fa-link"></i> Shfaq veturen</a>
                      </td>
                  </tr>
                  @endforeach
        </tbody>
      </table>
    </div>
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
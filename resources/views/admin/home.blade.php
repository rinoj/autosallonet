{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Ballina')

@section('content_header')
    <h1>Ballina</h1>
@stop
@section('boxtitle')
    5 veturat e fundit
@stop
@section('content')
    <div class="row">
    @hasrole('autosallon')
      @if($salloni != null)
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
      @endif
    @endhasrole
    @hasrole('admin')
    <div class="col-md-4">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-default"><i class="fa fa-building"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Sallonet</span>
            <span class="info-box-number">{{$sallonet->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-default"><i class="fa fa-users"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Users</span>
            <span class="info-box-number">{{$users->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
    </div>
    @endhasrole
    <div class="col-md-4">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-default"><i class="fa fa-car"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Veturat</span>
            <span class="info-box-number">{{$veturat->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
    </div>
</div>


    @hasrole('admin')
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
          <th>Data</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($veturat->sortByDesc('id')->take(5) as $vetura)
                <tr>
                  <td>{{$vetura->id}}</td>
                    <td>{{$vetura->marka->emri}}</td>
                    <td>{{$vetura->modeli->emri}}</td>
                    <td>{{$vetura->salloni->emri}}</td>
                    <td>{{$vetura->viti}}</td>
                    <td>{{$vetura->images->count()}}</td>
                    <td>{{$vetura->created_at}}</td>
                    <td>
                        <a href="{{route('showvetura', [$vetura->salloni->slug,$vetura->id])}}" class="btn btn-sm btn-default" target="_blank"><i class="fa fa-link"></i> Shfaq veturen</a>
                    </td>
                </tr>
                @endforeach
      </tbody>
    </table>
  </div>
  @endsection

  @include('layouts.box')
  </div>
</div>
@endhasrole
@stop

@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
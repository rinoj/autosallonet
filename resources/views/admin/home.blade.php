{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Ballina')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
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
@stop

@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
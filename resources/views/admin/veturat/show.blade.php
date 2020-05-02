@extends('adminlte::page')

@section('title', 'Vetura')

@section('content_header')
    <h1>Shfaq Veturen</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    @section('boxcontent')

    
    <div class='col-lg-12'>

        <table class="table">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Foto (kliko mbi foto per ta zmadhuar)</th>
                    <th>Aksioni</th>
                </tr>
            </thead>
            <tbody>
        	@foreach($vetura->images as $image)
        	<tr>
                <td>{{$image->id}}</td>
                <td>
                	<a href="{{url('images/veturat/'. $image->filename)}}" target="_blank"><img style="width: 100px;" src="{{url('images/veturat/'. $image->filename)}}"></a>
                </td>   
                <td><a href="{{route('admin.veturat.deleteimage', $image->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Fshi foton</a></td>
            </tr>
        	@endforeach
            </tbody>
        </table>


	</div>
    @endsection

    @section('boxtitle')
    <a href="{{ URL::previous() }}" class="btn btn-default"><i class="fa fa-angle-left"></i> Kthehu</a>
    
    @endsection

    @section('boxtitleright')
    {{ Form::open(array('route' => ['admin.veturat.uploadimage',$vetura->id], 'enctype' => 'multipart/form-data')) }}
    <div class="row">
        <div class="col-md-8">
            
        <input type="file" name="filename[]" class="form-control" multiple>
        </div>
        <div class="col-md-4">
        <button type="submit" class="btn btn-default"><i class="fa fa-upload"></i> Ngarko foto</button>
            
        </div>
        
    </div>


    {{ Form::close() }}
    @endsection

    @include('layouts.box')
    </div>
</div>
@endsection
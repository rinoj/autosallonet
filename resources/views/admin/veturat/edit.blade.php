@extends('adminlte::page')

@section('title', 'Edito Veturen')

@section('content_header')
    <h1>Edito Veturen</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxcontent')

    
    <div class='col-lg-12'>


    {{ Form::open(array('route' => ['admin.veturat.edit',$vetura->id ] , 'enctype' => 'multipart/form-data')) }}

    <div class="form-group">
        {{ Form::label('marka', 'Marka') }}
        <select class="form-control e1" name="marka" id="markaselect">
            <option value="" selected disabled>Selekto markën</option>
        	@foreach($markat as $marka)
        	<option value="{{$marka->id}}" {{$vetura->marka_id == $marka->id ? 'selected' : ''}}>{{$marka->emri}}</option>
        	@endforeach
        </select>
    </div>
    
    <div class="form-group">
        {{ Form::label('name', 'Modeli') }}
        <select class="form-control modeliselect e1" name="modeli" id="modeliselect">
            <option value="" selected disabled> Zgjedh Markën </option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('viti', 'Viti') }}
        <select class="form-control" name="viti">
        	@foreach($vitet as $viti)
        		<option value="{{$viti}}" {{$vetura->viti == $viti ? 'selected' : ''}}>{{$viti}}</option>
        	@endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('km', 'Kilometrazha') }}
        {{ Form::text('km', $vetura->km, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('kubikazha', 'Madhesia e Motorrit') }}
        {{ Form::text('kubikazha', $vetura->kubikazha, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lenda', 'Lenda Djegese') }}
        <select class="form-control" name="lenda">
        	<option value="Diesel" {{$vetura->lenda == 'Diesel' ? 'selected' : ''}}>Diesel</option>
        	<option value="Benzin" {{$vetura->lenda == 'Benzin' ? 'selected' : ''}}>Benzin</option>
        	<option value="Elektrik" {{$vetura->lenda == 'Elektrik' ? 'selected' : ''}}>Elektrik</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('ngjyra', 'Ngjyra') }}
        {{ Form::text('ngjyra', $vetura->ngjyra, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('interier', 'Interieri') }}
        {{ Form::text('interier', $vetura->interier, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Marshi', 'Marshi') }}
        <select class="form-control" name="marshi">
            <option value="Automatik" {{$vetura->marshi == 'Automatik' ? 'selected' : ''}}>Automatik</option>
            <option value="Manual" {{$vetura->marshi == 'Manual' ? 'selected' : ''}}>Manual</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('Cmimi', 'Cmimi') }}
        {{ Form::text('cmimi', $vetura->cmimi, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('dyer', 'Dyer') }}
        {{ Form::text('dyer', $vetura->dyer, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('doganuar', 'I doganuar') }}
         <select id="e1" class="form-control" name="doganuar">
                <option value="1" {{$vetura->doganuar == 1 ? 'selected' : ''}}>Po</option>
                <option value="0" {{$vetura->doganuar == 0 ? 'selected' : ''}}>Jo</option>
        </select>
    </div>
    
    <div class="form-group">
        {{ Form::label('pershkrimi', 'Pershkrimi') }}
        {{ Form::textarea('pershkrimi', '', array('class' => 'form-control' , 'placeholder' => 'Shkruj një përshkrim për gjendjen apo opsionet e veturës')) }}
    </div>
   
    @if($user->hasRole('admin'))
    <div class="form-group">
        {{ Form::label('salloni', 'Zgjedh Sallonin') }}
         <select id="e1" class="form-control" name="salloni">
            @foreach($sallonet as $salloni)
                <option value="{{$salloni->id}}" {{$salloni->id == $vetura->salloni->id ? 'selected' : ''}}>{{$salloni->emri}}</option>
            @endforeach
        </select>
    </div>
    @endif
    <div class="form-group">
        {{ Form::label('Foto', 'Foto: ') }}<br>
    	<a href="{{route('admin.veturat.show', $vetura->id)}}" class="btn btn-default"><i class="fa fa-upload"></i> Kliko ketu per te ngarkuar/edituar fotot</a>
        
    </div>


    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Ruaj</button>
    {{ Form::close() }}

</div>
    @endsection

    @section('boxtitle')
    <a href="{{ URL::previous() }}" class="btn btn-default"><i class="fa fa-angle-left"></i> Kthehu</a>
    @endsection
    @include('layouts.box')
    </div>
</div>
@endsection

@section('js')
 <script>
       $(".e1").select2({
    placeholder: "Selekto Markën"
});
    </script>

    <script src="{{url('theme/assets/libs/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript">
        
           $(document).ready(function (){
                var id = $('#markaselect').children("option:selected").val();
                getModelet(id);
                console.log('test');
            });
       
            $('#markaselect').on('change', '', function (e) {
                var id = $(this).children("option:selected").val();
                getModelet(id);
                console.log('test');
            });
             function getModelet(id) {
                    $.ajax({
                        type:'get',
                        url:'/modeletById/'+id,
                        success:function(success) {
                            var length = success.length;
                            var select = $(".modeliselect");
                            document.getElementById("modeliselect").innerHTML = "";
                            if(length == 0)
                              select.selectpicker('refresh');
                            // $(".modeliselect").html('<option value="">Zgjedh Marken</option').selectpicker('refresh'); 
                                select.prop("disabled", false);
                            for(var x = 0; x < length; x++){
                                var option = document.createElement('option');
                                option.value = success[x].id;
                                option.text = success[x].emri;
                                document.getElementById('modeliselect').options.add(option);
                                console.log(document.getElementById('modeliselect').options);
                                select.selectpicker('refresh');
                            }
                                
                        }
                    })
                }
            </script>
@endsection
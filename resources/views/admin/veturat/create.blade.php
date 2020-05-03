@extends('adminlte::page')

@section('title', 'Krijo Veturen')

@section('content_header')
    <h1>Krijo Veturen</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @section('boxcontent')

    
    <div class='col-lg-12'>


    {{ Form::open(array('route' => 'admin.veturat.store', 'enctype' => 'multipart/form-data')) }}


    {{ Form::hidden('rent', (URL::previous() == url('admin/rent') ? 'rent' : 'sallon') , array('class' => 'form-control', 'placeholder' => 'Shembull: 1995cm')) }}
    <div class="form-group">
        {{ Form::label('marka', 'Marka') }}
        <select class="form-control e1" name="marka" id="markaselect">
            <option value="" selected disabled>Selekto markën</option>
        	@foreach($markat as $marka)
        	<option value="{{$marka->id}}">{{$marka->emri}}</option>
        	@endforeach
        </select>
    </div>
    
    <div class="form-group">
        {{ Form::label('name', 'Modeli') }}
        <select class="form-control e1 modeliselect" name="modeli" id="modeliselect">
        	
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('viti', 'Viti') }}
        <select class="form-control" name="viti">
        	@foreach($vitet as $viti)
        		<option value="{{$viti}}">{{$viti}}</option>
        	@endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('km', 'Kilometrazha') }}
        {{ Form::text('km', '', array('class' => 'form-control', 'placeholder' => 'Shembull: 167000, pa presje dhjetore')) }}
    </div>

    <div class="form-group">
        {{ Form::label('kubikazha', 'Madhesia e Motorrit') }}
        {{ Form::text('kubikazha', '', array('class' => 'form-control', 'placeholder' => 'Shembull: 1995cm')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lenda', 'Lenda Djegese') }}
        <select class="form-control" name="lenda">
        	<option value="Diesel">Diesel</option>
        	<option value="Benzin">Benzin</option>
        	<option value="Elektrik">Elektrik</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('ngjyra', 'Ngjyra') }}
        {{ Form::text('ngjyra', '', array('class' => 'form-control' , 'placeholder' => 'Shembull: E zezë')) }}
    </div>

    <div class="form-group">
        {{ Form::label('interier', 'Interieri') }}
        {{ Form::text('interier', '', array('class' => 'form-control', 'placeholder' => 'Shembull: Lëkurë e zezë')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Marshi', 'Marshi') }}
        <select class="form-control" name="marshi">
        	<option value="Automatik">Automatik</option>
        	<option value="Manual">Manual</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('Cmimi', 'Cmimi') }}
        {{ Form::text('cmimi', '', array('class' => 'form-control', 'placeholder' => 'Shembull: 5500, pa presje dhjetore')) }}
    </div>

     <div class="form-group">
        {{ Form::label('dyer', 'Dyer') }}
        {{ Form::text('dyer', '', array('class' => 'form-control', 'placeholder' => 'Shembull: 4 dyer ose vetem numrin e dyerve')) }}
    </div>

    <div class="form-group">
        {{ Form::label('doganuar', 'I doganuar') }}
         <select class="form-control" name="doganuar">
                <option value="1">Po</option>
                <option value="0">Jo</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('pershkrimi', 'Pershkrimi') }}
        {{ Form::textarea('pershkrimi', '', array('class' => 'form-control' , 'placeholder' => 'Shkruj një përshkrim për gjendjen apo opsionet e veturës')) }}
    </div>

    @if($user->hasRole('admin'))
    <div class="form-group">
        {{ Form::label('salloni', 'Zgjedh Sallonin') }}
         <select     class="form-control e1" name="salloni">
            @foreach($sallonet as $salloni)
                <option value="{{$salloni->id}}">{{$salloni->emri}}</option>
            @endforeach
        </select>
    </div>
    @endif
    <div class="form-group">
        {{ Form::label('Foto', 'Foto') }}
    	<input type="file" name="filename[]" class="form-control" multiple>
        
    </div>


    {{ Form::submit('Ruaj', array('class' => 'btn btn-primary')) }}

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
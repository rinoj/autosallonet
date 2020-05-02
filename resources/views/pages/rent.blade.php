@extends('layouts.main')

@section('head')
@include('meta::manager', [
    'title'         => 'Rent a Car',
    'description'   => 'Gjej veturën tëndë të preferuar.',
])
@endsection

@section('content')

        <!-- end .b-title-page-->
        <div class="l-main-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <aside class="l-sidebar">
                  <div class="widget section-sidebar bg-light">
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Kërko veturën</h3>
                    <div class="widget-content">
                      <div class="widget-inner">

                        <form class="b-filter bg-light" action="{{ route('search') }}" id="orderform">
                          <div class="b-filter__main">
                            <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Zgjedh Markën" multiple="multiple" data-max-options="1" data-style="ui-select" name="marka" id="markaselect">
                                @foreach($markat as $marka)
                                  <option {{request()->get('marka') == $marka->emri ? 'selected' : ''}}>{{$marka->emri}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="b-filter__row">
                              <select class="selectpicker modeliselect" id="modeliselect" data-width="100%" title="Zgjedh Modelin" multiple="multiple" data-max-options="1" data-style="ui-select" name="modeli" disabled>
                               <option value="" selected disabled> Zgjedh Markën </option>
                              </select>
                            </div>

                             <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Zgjedh Marshin" multiple="multiple" data-max-options="1" data-style="ui-select" name="marshi">
                                <option {{request()->get('marshi') == 'Automatik' ? 'selected' : ''}}>Automatik</option>
                                <option {{request()->get('marshi') == 'Manual' ? 'selected' : ''}}>Manual</option>
                              </select>
                            </div>

                            <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Zgjedh Lënden Djegëse" multiple="multiple" data-max-options="1" data-style="ui-select" name="lenda">
                                <option {{request()->get('lenda') == 'Benzin' ? 'selected' : ''}}>Benzin</option>
                                <option {{request()->get('lenda') == 'Diesel' ? 'selected' : ''}}>Diesel</option>
                                <option {{request()->get('lenda') == 'Elektrik' ? 'selected' : ''}}>Elektrik</option>
                              </select>
                            </div>

                          
                            <div class="b-filter-slider ui-filter-slider">
                            <div class="b-filter-slider__title">Çmimi</div>
                            <div class="b-filter-slider__main">
                              <div id="filterPrice"></div>
                              <div class="b-filter__row row">
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <input class="ui-select" id="input-with-keypress-0" name="cmimiprej" />
                                </div>
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <input class="ui-select" id="input-with-keypress-1" name="cmimideri" />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="I doganuar" multiple="multiple" data-max-options="1" data-style="ui-select" name="doganuar">
                                <option value="1" {{request()->get('doganuar') == 'true' ? 'selected' : ''}}>Po</option>
                                <option value="0" {{request()->get('lenda') == 'true' ? 'selected' : ''}}>Jo</option>
                              </select>
                            </div>

                          <div class="b-filter__row" style="display:none">
                             <select class="selectpicker" data-width="100%" title="Rendit sipas çmimit" multiple="multiple" data-max-options="1" data-style="ui-select" name="order" id="orderselect">
                              <option value="asc">Rendit sipas çmimit më të ulët</option>
                              <option value="desc">Rendit sipas çmimit më të lartë</option>
                            </select>
                          </div>

                          <button class="b-filter__reset btn btn-default w-100" type="button">Reseto Filterat</button>
                          <button class="btn btn-primary w-100" type="submit">Kërko</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-filter-->
                  <section class="widget b-brands section-sidebar">
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>TOP BRENDET</h3>
                    <div class="widget-content">
                      <div class="b-brands__main d-flex flex-wrap"><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="{{url('theme/assets/media/content/b-brands/1.png')}}" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="{{url('theme/assets/media/content/b-brands/2.png')}}" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="{{url('theme/assets/media/content/b-brands/3.png')}}" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="{{url('theme/assets/media/content/b-brands/4.png')}}" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="{{url('theme/assets/media/content/b-brands/5.png')}}" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="{{url('theme/assets/media/content/b-brands/6.png')}}" alt="foto"/></a></div>
                    </div>
                  </section>
                  <!-- end .b-brands-->
                </aside>
              </div>

              <div class="col-lg-9">
                <div class="b-filter-goods">
                  <div class="row justify-content-between align-items-center">
                    <div class="b-filter-goods__wrap col-auto">
                      <div class="b-filter-goods__select">

              <form class="b-filter bg-light">
                        <select onChange="document.getElementById('orderselect').selectedIndex = this.value;document.getElementById('orderform').submit();" class="selectpicker" data-width="100%" title="Rendit sipas çmimit" multiple="multiple" data-max-options="1" data-style="ui-select" name="order">
                          <option value="0"  {{request()->get('order') == 'asc' ? 'selected' : ''}}>Rendit sipas çmimit më të ulët</option>
                          <option value="1"  {{request()->get('order') == 'desc' ? 'selected' : ''}}>Rendit sipas çmimit më të lartë</option>
                        </select>

              </form>
                      </div>
                    </div>
                    <div class="b-filter-goods__info col-auto">Duke shfaqur veturat<strong> {{$veturat->count()*$veturat->currentPage()-9}} deri {{$veturat->count()*$veturat->currentPage()}} </strong> nga totali i<strong> {{$veturat->total()}}</strong></div>
                    <div class="btns-switch col-auto">
                        <i class="btns-switch__item js-view-list  ic fa fa-th-list" style="padding:-125px !important"></i>
                        <i class="btns-switch__item js-view-th active ic fa fa-th"></i></div>
                  </div>
                </div>
                <!-- end .b-filter-goods-->
                 <main class="b-goods-group row">

                 	@foreach($veturat as $vetura)
                  <div class="b-goods-f col-lg-4 col-md-6">
                    <div class="b-goods-f__media">
                    	@if($vetura->images->count() == 0)
                        <img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/300x220/1.jpg')}}" alt="foto"/>
                        @else
                          <img class="b-goods-f__img img-scale" src="{{url('images/veturat/'. $vetura->images->first()['filename'])}}" style="width: 300; height: 220px;" alt="foto"/>
                        @endif
                    	<span class="b-goods-f__media-inner">
                    	<span class="b-goods-f__label bg-primary">€{{number_format($vetura->cmimi)}} / ditë</span></span></div>
                    <div class="b-goods-f__main">
                      <div class="b-goods-f__descrip">
                        <div class="b-goods-f__title">{{$vetura->marka->emri}} {{$vetura->modeli->emri}}</div>
                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                         <ul class="b-goods-f__list list-unstyled">
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Kubikazha:</span><span class="b-goods-f__list-info"> {{number_format($vetura->kubikazha)}} cm3</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Viti :</span><span class="b-goods-f__list-info">{{$vetura->viti}}</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Marshi :</span><span class="b-goods-f__list-info">{{$vetura->getMarshi()  }}</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Dyer : </span><span class="b-goods-f__list-info">{{$vetura->dyer}}</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Lënda Djegëse :</span><span class="b-goods-f__list-info">{{$vetura->lenda}}</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Ngjyra :</span><span class="b-goods-f__list-info">{{$vetura->ngjyra}}</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">I doganuar</span><span class="b-goods-f__list-info"></span></li>
                        </ul>
                      </div>
                      <div class="b-goods-f__sidebar"><a class="b-goods-f__bnr" href="#"><img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/></a><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col"></span><span class="b-goods-f__price-numb">€{{number_format($vetura->cmimi)}} në ditë</span></span></span>
                        
                      </div>
                    </div>
                  </div>
                  @endforeach
                
                </main>
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center">
                    {{$veturat->appends(Request::except('page'))->links()}}
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('homejs')
            <script type="text/javascript">


            var markaselect = $('#markaselect option:selected').val();

            if(markaselect != null){
              getModelet(markaselect);
            }


            $('#markaselect').on('change', '', function (e) {
                var id = $(this).children("option:selected").val();
                getModelet(id);
            });
             function getModelet(id) {
                    $.ajax({
                        type:'get',
                        url:'/modelet/'+id,
                        success:function(success) {
                            var length = success.length;
                            var select = $(".modeliselect");
                            document.getElementById("modeliselect").innerHTML = "";
                            // select.empty();
                            // $(".modeliselect").html('<option value="">Zgjedh Marken</option').selectpicker('refresh'); 
                                select.prop("disabled", false);
                            for(var x = 0; x < length; x++){
                                var option = document.createElement('option');
                                option.value = success[x].emri;
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
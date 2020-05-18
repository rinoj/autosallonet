@extends('layouts.main')

@section('head')
@include('meta::manager', [
    'title'         => 'AutoSallonet.com',
    'description'   => 'AutoSallonet.com është platformë ku Autosallonet dhe Rent a Car ofrojnë veturat dhe shërbimet e tyre.',
    'keywords'      => 'AutoSallonet, AutoSallonet.com, Autosalloni.com, Veturat, vetura, Rentacar kosove, Kosova Auto, Rentacar kosova, autosallonet rent'
])
@endsection

@section('content')

<div class="main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="700px" data-slider-arrows="false" data-slider-buttons="false" style="">
                <div class="sp-slides">
                    <!-- Slide 1-->
                   
                    <!-- Slide 2-->
                    <div class="main-slider__slide-2 sp-slide"><img class="sp-image" src="{{url('theme/assets/media/content/b-main-slider/bg-2.jpg')}}" alt="slider" />
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                            <div class="main-slider__wrap">
                                <div class="main-slider__slogan">Mirë se vini në</div>
                                <div class="main-slider__title">Auto<span class="text-primary">Sallonet</span>.com
                                    <br><span style="font-size:50%">Gjej veturën tënde</span></div>
                            </div>
                        </div>
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1500" data-show-delay="800" data-hide-delay="400"><img class="main-slider__figure-1 img-fluid" src="{{url('theme/assets/media/content/b-main-slider/bg-2_item-1.png')}}" alt="foto" /></div>
                        <div class="sp-layer" data-width="100%" data-show-transition="right" data-hide-transition="right" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400"><img class="main-slider__figure-2 img-fluid" src="{{url('theme/assets/media/content/b-main-slider/bg-2_item-2.png')}}" alt="foto" /></div>
                    </div>
                </div>
            </div>
            <!-- end .main-slider-->
            <div class="section-area bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="b-find">
                                <ul class="b-find-nav nav nav-tabs" id="findTab" role="tablist">
                                    <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link active" id="tab-allCar" data-toggle="tab" href="#content-allCar" role="tab" aria-controls="content-allCar" aria-selected="true">Kërko veturën</a></li>
                                </ul>
                                <div class="b-find-content tab-content" id="findTabContent">
                                    <div class="tab-pane fade show active" id="content-allCar">
                                        <form class="b-find__form"  action="{{ route('search') }}">
                                            <div class="b-find__row">
                                                <div class="b-find__main">
                                                    <div class="b-find__inner">
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">01</span> Zgjedh Markën</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" id="markaselect" data-width="100%" data-style="ui-select" name="marka">
                                                                    <option value="" selected disabled>Zgjedh Markën</option>
                                                                    @foreach($markat as $marka)
                                                                      <option value="{{$marka->emri}}">{{$marka->emri}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">02</span> Zgjedh Modelin</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker modeliselect"  data-width="100%" data-style="ui-select" name="modeli" id="modeliselect" disabled>
                                                                    <option value="" selected disabled>Zgjedh Markën</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">03</span> Çmimi</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select" name="cmimideri" title="Çmimi deri në">
                                                                    <option></option>
                                                                    <option value="5000">Deri në 5,000 &euro;</option>
                                                                    <option value="7500">Deri në 7,500 &euro;</option>
                                                                    <option value="10000">Deri në 10,000 &euro;</option>
                                                                    <option value="12500">Deri në 12,500 &euro;</option>
                                                                    <option value="15000">Deri në 15,000 &euro;</option>
                                                                    <option value="20000">Deri në 20,000 &euro;</option>
                                                                    <option value="100000">Deri në 100,000 &euro;</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="b-find__btn btn btn-primary">Kërko</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .b-find-->
            <section class="b-welcome section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="ui-title-slogan">Kjo platformë ju mundëson të gjeni veturën tuaj të preferuar</div>
                            <h2 class="ui-title">Auto<span class="text-primary">Sallonet</span>.com</h2>
                            <p>Vetura të ndryshme nga të gjitha llojet. Të gjitha veturat që janë të postuara në platformën tonë gjenden nëpër autosallone të ndryshme nëpër çdo qytet të Kosovës. Për të parë më shumë vetura klikoni në opsionin Vetura.</p>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- end .b-welcome-->
            <section class="section-carousel">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="ui-title">Shiko më shumë<span class="text-primary"> vetura</span></h2>
                            <div class="ui-title-slogan">Lëviz foton majtas ose djathtas</div>
                        </div>
                    </div>
                </div>
                <div class="section-carousel__inner bg-dark">
                    <div class="js-slider" data-slick="{&quot;slidesToShow&quot;: 5,  &quot;slidesToScroll&quot;: 5, &quot;infinite&quot;: true, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1800, &quot;settings&quot;: {&quot;slidesToShow&quot;: 4, &quot;slidesToScroll&quot;: 4}}, {&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 1040, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 767, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}}]}">
                         <!-- end .b-goods-->
                        @foreach($veturat as $vetura)
                         <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media"> 
                                @if($vetura->images->count() == 0)
                                  <a href="{{route('showvetura', [$vetura->salloni->slug,$vetura->slug])}}"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/2.jpg')}}" alt="foto" /></a>
                                @else
                                  <a href="{{route('showvetura', [$vetura->salloni->slug,$vetura->slug])}}"><img class="b-goods-f__img img-scale" style="width: 375px; height: 300px !important" src="{{url('images/veturat/'. $vetura->images->first()['filename'])}}" alt="foto" /></a>
                                @endif
                                
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><a href="#"><span>{{$vetura->emri()}}</span></a></div>
                                    <div class="b-goods-f__info"></div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> {{$vetura->km}}km</li>
                                        <li class="b-goods-f__list-item"><i class="ic fa fa-eur" style="margin-top:5px"></i> {{$vetura->cmimi}}</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> {{$vetura->getMarshi()}}</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$30,480</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                      
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12"><a class="section-carousel__btn btn btn-primary" href="{{route('veturat')}}"><i class="ic icon-list"></i> Shiko të gjitha veturat</a></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-carousel-->
            
          
           
            <!-- end .b-progress-->
            <section class="b-isotope section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="ui-title-slogan">Kërko sipas kategorisë</div>
                            <h2 class="ui-title">Sipas<span class="text-primary"> Kategorisë</span></h2>
                            <ul class="b-isotope-filter list-unstyled">
                                <li class="current"><a href="" data-filter="*">Shfaq të gjitha</a></li>
                                <li><a href="" data-filter=".BMW">BMW</a></li>
                                <li><a href="" data-filter=".Volkswagen">VW</a></li>
                                <li><a href="" data-filter=".Audi">Audi</a></li>
                                <li><a href="" data-filter=".Mercedes">Mercedes</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="b-isotope-grid grid list-unstyled row">
                        <li class="grid-sizer col-lg-4 col-md-6"></li>
                        
                        @foreach($veturat as $vetura)
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web {{$vetura->marka->emri}}">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    @if($vetura->images->count() == 0)
                                    <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/360x260/2.jpg')}}" alt="foto" /></a>
                                    @else
                                    <a href="#"><img class="b-goods-f__img img-scale" style="width: 360px; height: 260px" src="{{url('images/veturat/'. $vetura->images->first()['filename'])}}" alt="foto" /></a>

                                    @endif
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span class="b-goods-f__label bg-primary">I RI</span><span>{{$vetura->emri()}}</span>
                                        </div>
                                        <div class="b-goods-f__info"></div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">{{$vetura->km}}km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">{{$vetura->viti}}</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">{{$vetura->getMarshi()}}</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">{{$vetura->lenda}}</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">&euro; {{$vetura->cmimi}}</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
            </section>
           
            <div class="section-goods-vip">
                <a class="b-goods-vip b-goods-vip_1" href="#">
                    <div class="b-goods-vip__main"><span class="b-goods-vip__label b-goods-vip__label-1 bg-primary">NEW</span>
                        <div class="b-goods-vip__title">AUDI Q2L (2019)</div>
                        <div class="b-goods-vip__subtitle">LUXURTY APART -<span class="b-goods-vip__price"> $499/M</span></div>
                        <ul class="b-goods-vip__list list-unstyled">
                            <li class="b-goods-vip__list-item">2019</li>
                            <li class="b-goods-vip__list-item">Manual</li>
                            <li class="b-goods-vip__list-item">Benzin</li>
                            <li class="b-goods-vip__list-item">661 hp</li>
                        </ul>
                    </div>
                </a>
                <a class="b-goods-vip b-goods-vip_2" href="#">
                    <div class="b-goods-vip__main"><span class="b-goods-vip__label b-goods-vip__label-2 bg-primary">As Low As<strong class="b-goods-vip__label_b"> 1.5% APR</strong></span>
                        <div class="b-goods-vip__subtitle">Off-Road King</div>
                        <div class="b-goods-vip__title">JAGUAR I PACE</div>
                        <div class="b-goods-vip__slogan">Ofertë E Limituar</div>
                    </div>
                </a>
                <a class="b-goods-vip b-goods-vip_3" href="#">
                    <div class="b-goods-vip__main">
                        <div class="b-goods-vip__subtitle">2019 Models</div>
                        <div class="b-goods-vip__title">All Brands Cars<span class="b-goods-vip__label b-goods-vip__label-3 bg-primary">MORE POWER</span></div>
                        <div class="b-goods-vip__slogan">PREMIUM LUXURY</div>
                    </div>
                </a>
            </div>
                        
            <section class="b-bnr-3 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="b-bnr-3__title ui-tilte">Bleni veturën tuaj nga AutoSallonet.com</h2>
                            <div class="b-bnr-3__info">Për sponzorizim, klikoni në butonin Kontakt</div><a class="b-bnr-3__btn btn btn-primary" href="#">Kontakto</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-bnr-->
            <div class="b-gallery js-slider" data-slick="{&quot;slidesToShow&quot;: 8, &quot;arrows&quot;: false, &quot;autoplay&quot;: true,  &quot;slidesToScroll&quot;: 1, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 6, &quot;slidesToScroll&quot;: 3}}, {&quot;breakpoint&quot;: 768, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}]}">
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/1.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/2.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/3.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/4.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/5.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/6.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/7.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/8.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/1.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/2.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/3.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/4.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/5.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/6.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/7.jpg')}}" alt="foto" /></div>
                <div class="b-gallery__item"><img class="img-fluid" src="{{url('theme/assets/media/content/b-gallery/240x200/8.jpg')}}" alt="foto" /></div>
            </div>
            <!-- end .b-gallery-->

            @endsection

            @section('homejs')
            <script type="text/javascript">
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
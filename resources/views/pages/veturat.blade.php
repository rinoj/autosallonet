@extends('layouts.main')

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
                        <form class="b-filter bg-light">
                          <div class="b-filter__main">
                            <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Zgjedh Markën" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <option>Select 1</option>
                                <option>Select 2</option>
                                <option>Select 3</option>
                                <option>Select 4</option>
                              </select>
                            </div>
                            <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Zgjedh Modelin" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <option>Select 1</option>
                                <option>Select 2</option>
                                <option>Select 3</option>
                                <option>Select 4</option>
                              </select>
                            </div>
                            <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Vehicle Type" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <option>Select 1</option>
                                <option>Select 2</option>
                                <option>Select 3</option>
                                <option>Select 4</option>
                              </select>
                            </div>
                            <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Condition" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <option>Select 1</option>
                                <option>Select 2</option>
                                <option>Select 3</option>
                                <option>Select 4</option>
                              </select>
                            </div>
                            <div class="b-filter__row row">
                              <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                <select class="selectpicker" data-width="100%" title="Viti Prej" multiple="multiple" data-max-options="1" data-style="ui-select">
                                  <option>Select 1</option>
                                  <option>Select 2</option>
                                  <option>Select 3</option>
                                  <option>Select 4</option>
                                </select>
                              </div>
                              <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                <select class="selectpicker" data-width="100%" title="Viti Deri" multiple="multiple" data-max-options="1" data-style="ui-select">
                                  <option>Select 1</option>
                                  <option>Select 2</option>
                                  <option>Select 3</option>
                                  <option>Select 4</option>
                                </select>
                              </div>
                            </div>
                            <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Marshi" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <option>Select 1</option>
                                <option>Select 2</option>
                                <option>Select 3</option>
                                <option>Select 4</option>
                              </select>
                            </div>
                            <div class="b-filter__row">
                              <select class="selectpicker" data-width="100%" title="Lënda Djegëse" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <option>Select 1</option>
                                <option>Select 2</option>
                                <option>Select 3</option>
                                <option>Select 4</option>
                              </select>
                            </div>
                          </div>
                          <div class="b-filter-slider ui-filter-slider">
                            <div class="b-filter-slider__title">Çmimi</div>
                            <div class="b-filter-slider__main">
                              <div id="filterPrice"></div>
                              <div class="b-filter__row row">
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <input class="ui-select" id="input-with-keypress-0"/>
                                </div>
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <input class="ui-select" id="input-with-keypress-1"/>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button class="b-filter__reset btn btn-default w-100" type="button">Reset Filters</button>
                          <button class="btn btn-primary w-100">Kërko</button>
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
                        <select class="selectpicker" data-width="100%" title="Newest First" multiple="multiple" data-max-options="1" data-style="ui-select">
                          <option>A-Z</option>
                          <option>Z-A</option>
                        </select>
                      </div>
                    </div>
                    <div class="b-filter-goods__info col-auto">Showing results<strong> 1 to 10</strong> of total<strong> 145</strong></div>
                    <div class="btns-switch col-auto"><i class="btns-switch__item js-view-list active ic fa fa-th-list"></i><i class="btns-switch__item js-view-th ic fa fa-th"></i></div>
                  </div>
                </div>
                <!-- end .b-filter-goods-->
                <main class="b-goods-group row">
                  @foreach($veturat as $vetura)
                  <div class="b-goods-f col-12 b-goods-f_row">
                    <div class="b-goods-f__media">
                      <a href="{{route('showvetura', $vetura->id)}}">
                        <img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/300x220/1.jpg')}}" alt="foto"/>
                      </a>
                      <span class="b-goods-f__media-inner">
                        <span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span><span class="b-goods-f__label bg-primary">NEW</span>
                      </span>
                    </div>
                    <div class="b-goods-f__main">
                      <div class="b-goods-f__descrip">
                        <div class="b-goods-f__title"><a href="{{route('showvetura', $vetura->id)}}">{{$vetura->marka->emri}} {{$vetura->modeli->emri}}</a></div>
                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                        <ul class="b-goods-f__list list-unstyled">
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Kilometrazha :</span><span class="b-goods-f__list-info">{{$vetura->km}}km</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Viti :</span><span class="b-goods-f__list-info">{{$vetura->viti}}</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Marshi :</span><span class="b-goods-f__list-info">{{$vetura->marshi}}</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Type :</span><span class="b-goods-f__list-info">sedan</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Lënda Djegëse :</span><span class="b-goods-f__list-info">{{$vetura->lenda}}</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Kubikazha:</span><span class="b-goods-f__list-info">{{$vetura->kubikazha}}</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Ngjyra :</span><span class="b-goods-f__list-info">{{$vetura->ngjyra}}</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">I doganuar</span><span class="b-goods-f__list-info"></span></li>
                        </ul>
                      </div>
                      <div class="b-goods-f__sidebar"><a class="b-goods-f__bnr" href="#"><img src="{{url('theme/assets/media/content/b-goods/auto-check.png')}}" alt="auto check"/></a><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">Çmimi:&nbsp;</span><span class="b-goods-f__price-numb">€{{number_format($vetura->cmimi)}}</span></span></span>
                        <div class="b-goods-f__imprest"> </div><span class="b-goods-f__compare">Compare<i class="ic fas fa-columns"></i></span>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </main>
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span class="ic fas fa-angle-double-right" aria-hidden="true"></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>

@endsection
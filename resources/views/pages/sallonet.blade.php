@extends('layouts.main')
 
@section('content')

<main>
          <div class="section-area bg-light">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="b-find b-find_sm">
                    <form class="b-find__form">
                      <div class="b-find__row">
                        <div class="b-find__main">
                          <div class="b-find__inner">
                            <div class="b-find__item">
                              <div class="b-find__selector">
                                <select class="selectpicker" data-width="100%" title="Choose Make" multiple="multiple" data-max-options="1" data-style="ui-select">
                                  <option>Option 1</option>
                                  <option>Option 2</option>
                                  <option>Option 3</option>
                                </select>
                              </div>
                            </div>
                            <div class="b-find__item">
                              <div class="b-find__selector">
                                <select class="selectpicker" data-width="100%" title="Choose Model" multiple="multiple" data-max-options="1" data-style="ui-select">
                                  <option>Model 1</option>
                                  <option>Model 2</option>
                                  <option>Model 3</option>
                                </select>
                              </div>
                            </div>
                            <div class="b-find__item">
                              <div class="b-find__selector">
                                <select class="selectpicker" data-width="100%" title="Choose Year" multiple="multiple" data-max-options="1" data-style="ui-select">
                                  <option>2019</option>
                                  <option>2018</option>
                                  <option>2017</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="b-find__btn btn btn-primary">find dealer</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end .b-find-->
          <section class="section-dealers">
            <div class="row">
              <div class="col-xl">
                <div class="section-dealers__main">
                  <div class="section-dealers__header">
                    <div class="row align-items-center">
                      <h2 class="section-dealers__title ui-title-inner col">Sallonet</h2>
                      <div class="section-dealers__select col-auto">
                        <select class="selectpicker" data-width="210px" title="Sort By" multiple="multiple" data-max-options="1" data-style="ui-select">
                          <option>A-Z</option>
                          <option>Z-A</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="b-dealers-group">
                  	@foreach($sallonet as $salloni)
                    <div class="b-dealers">
                      <div class="row justify-content-between">
                        <div class="col-md-auto">
                          <div class="b-dealers__brand"><img class="b-dealers__img img-fluid" src="{{url('theme/assets/media/content/b-brands-2/4.jpg')}}" alt="brand"/></div>
                        </div>
                        <div class="b-dealers__main col-md">
                          <div class="b-dealers__header">
                            <div class="b-dealers__title">{{$salloni->emri}}</div>
                            <ul class="b-dealers-rating list-unstyled">
                              <li class="b-dealers-rating__item"><i class="fas fa-star"></i></li>
                              <li class="b-dealers-rating__item"><i class="fas fa-star"></i></li>
                              <li class="b-dealers-rating__item"><i class="fas fa-star"></i></li>
                              <li class="b-dealers-rating__item"><i class="fas fa-star"></i></li>
                              <li class="b-dealers-rating__item"><i class="fas fa-star"></i></li>
                            </ul><span class="b-dealers__rev"> </span>
                          </div>
                          <div class="b-dealers__body">
                            <div class="b-dealers__info"><i class="ic flaticon-car-1 text-primary"></i>{{$salloni->veturat->count()}} vetura<a class="b-dealers__link" href="#"> Shiko Të Gjitha Veturat</a></div>
                            <div class="b-dealers__contacts"><span class="b-dealers__contacts-item"><i class="ic icon-location-pin"></i>{{$salloni->adresa}}</span><span class="b-dealers__contacts-item"><i class="ic icon-call-in"></i>{{$salloni->telefoni}}</span></div>
                          </div>
                        </div>
                        <div class="col-md-auto align-self-end"><a class="btn btn-secondary btn-sm" href="#">Detajet</a></div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="text-center"><a class="section-dealers__btn-more btn btn-primary" href="#">Shiko më shumë sallone</a></div>
                </div>
              </div>
              <div class="col-xl-auto">
                <div class="b-dealers-map" id="map"></div>
              </div>
            </div>
          </section>
          <!-- end .b-dealers-->
        </main>

@endsection
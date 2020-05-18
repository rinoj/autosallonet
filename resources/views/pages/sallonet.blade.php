@extends('layouts.main')


@section('head')
@include('meta::manager', [
    'title'         => 'Sallonet',
    'description'   => 'Lista e Auto Salloneve.',
    'keywords'      => 'AutoSallonet, AutoSallonet.com, Autosalloni.com, Veturat, sallonet, Rentacar kosove, Kosova Auto, Rentacar kosova, autosallonet rent'
])
@endsection

@section('content')

<main>
         
          <!-- end .b-find-->
          <section class="section-dealers">
            <div class="row">
              <div class="col-xl-8 offset-xl-2">
                <div class="section-dealers__main">
                  <div class="section-dealers__header">
                    <div class="row align-items-center">
                      <h2 class="section-dealers__title ui-title-inner col">Sallonet</h2>
                      <div class="section-dealers__select col-auto">
                        <div class="b-filter-slider ui-filter-slider">
                            <div class="b-filter-slider__main">
                              <div class="b-filter__row row" >
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <input class="ui-select" id="input-with-keypress-0" name="kerkon" placeholder="Kërko Sallonin" />
                                </div>
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <button class="btn btn-primary w-100"  type="submit">Kërko</button>
                                </div>
                              </div>
                            </div>
                          </div>
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
                            
                          </div>
                          <div class="b-dealers__body">
                            <div class="b-dealers__contacts"><span class="b-dealers__contacts-item"><i class="ic icon-location-pin"></i>{{$salloni->adresa}}</span><span class="b-dealers__contacts-item"><i class="ic icon-call-in"></i>{{$salloni->telefoni}}</span></div>
                          </div>
                        </div>
                        <div class="col-md-auto align-self-end">
                          <a class="btn btn-secondary btn-sm" href="{{route('salloni', $salloni->slug)}}">Detajet</a>
                          <a class="btn btn-secondary btn-sm" href="{{route('sallonishowveturat', $salloni->slug)}}">Shiko Veturat</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="text-center"><a class="section-dealers__btn-more btn btn-primary" href="#">Shiko më shumë sallone</a></div>
                </div>
              </div>
            </div>
          </section>
          <!-- end .b-dealers-->
        </main>

@endsection
@extends('layouts.main')

@section('head')
@include('meta::manager', [
    'title'         => $salloni->emri,
    'description'   => $salloni->metadescription,
])
@endsection

@section('content')
<main>
          
            
            <section class="b-dealers-info">
                
                
            <div class="row">
              <div class="col-xl-auto">
                <div class="b-dealers-info__inner">
                  <div class="row">
                    <div class="col"><a class="b-dealers-info__top-link btn btn-secondary btn-sm" href="{{route('sallonet')}}"><i class="ic arrow_left text-primary"></i> Kthehu te Sallonet</a></div>
                  </div>
                  <div class="b-dealers-info__header">
                    <div class="row justify-content-between">
                      <div class="col">
                          <li class="b-dealers-rating__item"><i class="fas fa-star text-primary"></i></li>
                        <h2 class="b-dealers-info__title ui-title-inner" style="padding-left:10px">{{$salloni->emri}}</h2>
                        <ul class="b-dealers-rating list-unstyled">
                          <li class="b-dealers-rating__item"><i class="fas fa-star text-primary"></i></li>
                        </ul>
                        <div class="b-dealers-info__links"><a class="b-dealers-info__link" href="#">Vizito uebsite</a>
                          <ul class="b-dealers-soc list-unstyled">
                            <li class="b-dealers-soc__item"><a class="b-dealers-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-auto"><span class="b-dealers-info__brand b-dealers__brand"><img class="b-dealers-info__brand-img img-fluid" src="{{url('theme/assets/media/content/b-brands-2/4.jpg')}}" alt="brand"/></span></div>
                    </div>
                  </div>
                  <div class="b-dealers-info__main">
                    <div class="row">
                      <div class="col-lg-auto">
                        <div class="b-dealers-info__media"><img class="img-fluid" src="{{url('theme/assets/media/content/b-dealers-info/1.jpg')}}" alt="foto"/></div>
                      </div>
                      <div class="b-dealers-info__contacts col-lg">
                        <div class="b-dealers-info__contacts-item"><i class="ic icon-location-pin text-primary"></i>
                          <div class="b-dealers-info__contacts-title">Adresa</div>
                          <div class="b-dealers-info__contacts-info">{{$salloni->adresa}}</div>
                        </div>
                        <div class="b-dealers-info__contacts-item"><i class="ic icon-call-in text-primary"></i>
                          <div class="b-dealers-info__contacts-title">Telefoni</div>
                          <div class="b-dealers-info__contacts-info">{{$salloni->telefoni}}</div>
                        </div>
                        <div class="b-dealers-info__contacts-item"><i class="ic icon-clock text-primary"></i>
                          <div class="b-dealers-info__contacts-title">Orari</div>
                          <div class="b-dealers-info__contacts-info">E hënë - E premte: 09:00 - 18:00<span><br>E shtunë: 10:00 - 17:00</span></div>
                        </div>
                        <div class="b-dealers-info__contacts-item"><i class="ic icon-envelope-open text-primary"></i>
                          <div class="b-dealers-info__contacts-title">Email</div>
                          <div class="b-dealers-info__contacts-info">{{$salloni->user->email}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="b-dealers-info__desrip">
                          <h2 class="ui-title-sm">Të dhëna rreth {{$salloni->emri}}</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut sed enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autesy irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, ipsum sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                        
                        </div>
                      </div>
                    </div>
                      

                      
                      
                      
                  </div>
                </div>
              </div>
              <div class="col-xl">
                <div class="b-dealers-info-map" id="map"></div>
              </div>
            </div>
            
          </section>
          <!-- end .b-dealers-info-->
        </main>

@endsection
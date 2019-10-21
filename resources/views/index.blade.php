@extends('layouts.main')

@section('content')

<div class="main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="700px" data-slider-arrows="false" data-slider-buttons="false">
                <div class="sp-slides">
                    <!-- Slide 1-->
                    <div class="main-slider__slide sp-slide"><img class="sp-image" src="{{url('theme/assets/media/content/b-main-slider/bg-1.jpg')}}" alt="slider" />
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                            <div class="main-slider__wrap">
                                <div class="main-slider__slogan">luxury unleashed</div>
                                <div class="main-slider__title">MAZDA<span class="main-slider__title_lg text-right">CX3<span class="main-slider__title">’19</span></span>
                                </div>
                                <div class="text-center">
                                    <div class="main-slider__price"><span class="main-slider__price_up">$</span>249<span class="main-slider__price_down">/m</span><span class="main-slider__price_info">for 24 months</span></div>
                                </div>
                                <div class="text-right"><a class="main-slider__link" href="blog-post.html">learn more</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2-->
                    <div class="main-slider__slide-2 sp-slide"><img class="sp-image" src="{{url('theme/assets/media/content/b-main-slider/bg-2.jpg')}}" alt="slider" />
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                            <div class="main-slider__wrap">
                                <div class="main-slider__slogan">expert auto services</div>
                                <div class="main-slider__title">Premium
                                    <br>Cars Dealers</div>
                                <div class="text-right"><a class="main-slider__link" href="blog-post.html">learn more</a></div>
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
                                    <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link active" id="tab-allCar" data-toggle="tab" href="#content-allCar" role="tab" aria-controls="content-allCar" aria-selected="true">All Car Types</a></li>
                                    <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link" id="tab-newCars" data-toggle="tab" href="#content-newCars" role="tab" aria-controls="content-newCars" aria-selected="false">New Cars</a></li>
                                    <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link" id="tab-usedCars" data-toggle="tab" href="#content-usedCars" role="tab" aria-controls="content-usedCars" aria-selected="false">Used Cars</a></li>
                                </ul>
                                <div class="b-find-content tab-content" id="findTabContent">
                                    <div class="tab-pane fade show active" id="content-allCar">
                                        <form class="b-find__form">
                                            <div class="b-find__row">
                                                <div class="b-find__main">
                                                    <div class="b-find__inner">
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">01</span> Zgjedh Markën</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Audi</option>
                                                                    <option>BMV</option>
                                                                    <option>Opel</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">02</span> Zgjedh Modelin</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Model 1</option>
                                                                    <option>Model 2</option>
                                                                    <option>Model 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">03</span> Çmimi</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Max $5000</option>
                                                                    <option>Max $15000</option>
                                                                    <option>Max $25000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="b-find__btn btn btn-primary">Kërko</button>
                                            </div>
                                            <div class="b-find__checkbox-group"><span class="b-find__checkbox-item">
                            <input class="forms__check" id="newCars" type="checkbox" checked="checked"/>
                            <label class="forms__label forms__label-check" for="newCars">New Cars</label></span><span class="b-find__checkbox-item">
                            <input class="forms__check" id="usedCars" type="checkbox"/>
                            <label class="forms__label forms__label-check" for="usedCars">Used Cars</label></span></div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="content-newCars">
                                        <form class="b-find__form">
                                            <div class="b-find__row">
                                                <div class="b-find__main">
                                                    <div class="b-find__inner">
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">01</span> Select Make</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Audi</option>
                                                                    <option>BMV</option>
                                                                    <option>Opel</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">02</span> Select a Model</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Model 1</option>
                                                                    <option>Model 2</option>
                                                                    <option>Model 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">03</span> Price Range</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Max $5000</option>
                                                                    <option>Max $15000</option>
                                                                    <option>Max $25000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="b-find__btn btn btn-primary">Kërko</button>
                                            </div>
                                            <div class="b-find__checkbox-group"><span class="b-find__checkbox-item">
                            <input class="forms__check" id="newCars2" type="checkbox" checked="checked"/>
                            <label class="forms__label forms__label-check" for="newCars2">New Cars</label></span><span class="b-find__checkbox-item">
                            <input class="forms__check" id="usedCars2" type="checkbox"/>
                            <label class="forms__label forms__label-check" for="usedCars2">Used Cars</label></span></div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="content-usedCars">
                                        <form class="b-find__form">
                                            <div class="b-find__row">
                                                <div class="b-find__main">
                                                    <div class="b-find__inner">
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">01</span> Select Make</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Audi</option>
                                                                    <option>BMV</option>
                                                                    <option>Opel</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">02</span> Select a Model</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Model 1</option>
                                                                    <option>Model 2</option>
                                                                    <option>Model 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">03</span> Price Range</div>
                                                            <div class="b-find__selector">
                                                                <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                    <option>Max $5000</option>
                                                                    <option>Max $15000</option>
                                                                    <option>Max $25000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="b-find__btn btn btn-primary">Search</button>
                                            </div>
                                            <div class="b-find__checkbox-group"><span class="b-find__checkbox-item">
                            <input class="forms__check" id="newCars3" type="checkbox" checked="checked"/>
                            <label class="forms__label forms__label-check" for="newCars3">New Cars</label></span><span class="b-find__checkbox-item">
                            <input class="forms__check" id="usedCars3" type="checkbox"/>
                            <label class="forms__label forms__label-check" for="usedCars3">Used Cars</label></span></div>
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
                            <h2 class="ui-title">Mirë se vini në <span class="text-primary"> AutoSallonet.com</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididu et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull laboris aliquip ex ea commodo consequat. Duis aute irure dolorin reprehenderits volupta velit dolore fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                            <p>Non proident sunt ind culpa qudesa officia deserunt mollit anim est laborum. Sed per unde omnis iste natus error sit voluptatem accusantium doloremque laudantium tom eaque ipsa quae ab illo inventore veritatis architecto.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-7">
                            <ul class="b-welcome-list list-unstyled d-sm-flex justify-content-around">
                                <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-car"></i>We Offers Lower
                                    <br> Cars Prices</li>
                                <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-gearbox"></i>Largest cars
                                    <br> Dealership</li>
                                <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-wrench"></i>Multipoint Safety
                                    <br> Checks offers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-welcome-->
            <section class="section-carousel">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="ui-title-slogan">Helps you to find your next car easily</div>
                            <h2 class="ui-title">Featured<span class="text-primary"> Vehicles</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-carousel__inner bg-dark">
                    <div class="js-slider" data-slick="{&quot;slidesToShow&quot;: 5,  &quot;slidesToScroll&quot;: 5, &quot;infinite&quot;: true, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1800, &quot;settings&quot;: {&quot;slidesToShow&quot;: 4, &quot;slidesToScroll&quot;: 4}}, {&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 1040, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 767, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}}]}">
                        <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/1.jpg')}}" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Audi Q2 L35 Quattro</span></div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: 2017</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - Petrol</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$45,800</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                         <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/2.jpg')}}" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Ford Mustang SZ3</span></div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: 2017</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - Petrol</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$30,480</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                           <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/3.jpg')}}" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Mercedes Benz C Class</span></div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: 2017</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - Petrol</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$30,480</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                           <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/4.jpg')}}" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Skoda KodiaQ 2019</span></div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: 2017</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - Petrol</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$30,480</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                          <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/1.jpg')}}" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Audi Q2 L35 Quattro</span></div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: 2017</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - Petrol</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$45,800</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                           <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/2.jpg')}}" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Ford Mustang SZ3</span></div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: 2017</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - Petrol</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$30,480</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                          <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/3.jpg')}}" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Mercedes Benz C Class</span></div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: 2017</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - Petrol</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$30,480</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                       <div class="b-goods-f b-goods-f_mod-a">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/375x300/4.jpg')}}" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Skoda KodiaQ 2019</span></div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: 2017</li>
                                        <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - Petrol</li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$30,480</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12"><a class="section-carousel__btn btn btn-primary" href="#"><i class="ic icon-list"></i> Shiko të gjitha veturat</a></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-carousel-->
            <section class="b-services section-default bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="b-services-nav nav" id="servicesTab" role="tablist">
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link active" id="repairing-tab" data-toggle="tab" href="#repairing" role="tab" aria-controls="repairing" aria-selected="true"><span class="b-services-nav__number">01</span><i class="ic flaticon-car-door"></i><span class="b-services-nav__info">Parts Repairing</span></a></li>
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="inspection-tab" data-toggle="tab" href="#inspection" role="tab" aria-controls="inspection" aria-selected="false"><span class="b-services-nav__number">02</span><i class="ic flaticon-plunger"></i><span class="b-services-nav__info">Car Inspection</span></a></li>
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="trade-tab" data-toggle="tab" href="#trade" role="tab" aria-controls="trade" aria-selected="false"><span class="b-services-nav__number">03</span><i class="ic flaticon-car-2"></i><span class="b-services-nav__info">Vehicle Trade-In</span></a></li>
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="painting-tab" data-toggle="tab" href="#painting" role="tab" aria-controls="painting" aria-selected="false"><span class="b-services-nav__number">04</span><i class="ic flaticon-paint-roller"></i><span class="b-services-nav__info">Auto Painting</span></a></li>
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="financing-tab" data-toggle="tab" href="#financing" role="tab" aria-controls="financing" aria-selected="false"><span class="b-services-nav__number">05</span><i class="ic flaticon-money"></i><span class="b-services-nav__info">Auto Financing</span></a></li>
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="false"><span class="b-services-nav__number">06</span><i class="ic flaticon-car-4"></i><span class="b-services-nav__info">Vehicle Delivery</span></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="b-services__main">
                                <div class="ui-title-slogan">Helps you to find your next car easily</div>
                                <h2 class="ui-title">Services We<span class="text-primary"> Offers</span></h2>
                                <div class="b-services-content tab-content" id="servicesTabContent">
                                    <div class="b-services-content__item tab-pane fade show active" id="repairing" role="tabpanel" aria-labelledby="repairing-tab"><img class="img-fluid" src="{{url('theme/assets/media/content/b-services/1.jpg')}}" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Parts Repairing</h3>
                                        <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="b-services-content__item tab-pane fade" id="inspection" role="tabpanel" aria-labelledby="inspection-tab"><img class="img-fluid" src="{{url('theme/assets/media/content/b-services/1.jpg')}}" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Car Inspection</h3>
                                        <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="b-services-content__item tab-pane fade" id="trade" role="tabpanel" aria-labelledby="trade-tab"><img class="img-fluid" src="{{url('theme/assets/media/content/b-services/1.jpg')}}" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Vehicle Trade-In</h3>
                                        <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="b-services-content__item tab-pane fade" id="painting" role="tabpanel" aria-labelledby="painting-tab"><img class="img-fluid" src="{{url('theme/assets/media/content/b-services/1.jpg')}}" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Auto Painting</h3>
                                        <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="b-services-content__item tab-pane fade" id="financing" role="tabpanel" aria-labelledby="financing-tab"><img class="img-fluid" src="{{url('theme/assets/media/content/b-services/1.jpg')}}" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Auto Financing</h3>
                                        <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="b-services-content__item tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab"><img class="img-fluid" src="{{url('theme/assets/media/content/b-services/1.jpg')}}" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Vehicle Delivery</h3>
                                        <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-services-->
            <section class="b-bnr bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="b-bnr__main">
                                <h2 class="b-bnr__title">Book your Free Car Inspection</h2>
                                <div class="b-bnr__info">Labore dolore magna aliqua minim ipsum veniam quis nostrud exercitation</div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="b-bnr__second"><a class="btn btn-primary" href="#">get rigistered</a>
                                <div class="b-bnr-contacts">
                                    <div class="b-bnr-contacts__info">Call Us For Booking Vehicle</div><a class="b-bnr-contacts__phone" href="tel:+17553028549"><i class="ic icon-call-end text-primary"></i> +1 (755) 302-8549</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-bnr-->
            <div class="section-progress">
                <div class="container">
                    <ul class="b-progress-list row list-unstyled">
                        <li class="b-progress-list__item col-md-3">
                            <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">Vehicles Stock</span><span class="b-progress-list__percent js-chart" data-percent="3874"><span class="js-percent"></span></span>
                            </div>
                        </li>
                        <li class="b-progress-list__item col-md-3">
                            <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">dealers served</span><span class="b-progress-list__percent js-chart" data-percent="299"><span class="js-percent"></span><span>+</span></span>
                            </div>
                        </li>
                        <li class="b-progress-list__item col-md-3">
                            <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">Happy Customers</span><span class="b-progress-list__percent js-chart" data-percent="6403"><span class="js-percent"></span></span>
                            </div>
                        </li>
                        <li class="b-progress-list__item col-md-3">
                            <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">vehicles on sale</span><span class="b-progress-list__percent js-chart" data-percent="1450"><span class="js-percent"></span><span>+</span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end .b-progress-->
            <section class="b-isotope section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="ui-title-slogan">Helps you to find perfect car</div>
                            <h2 class="ui-title">Our Vehicles<span class="text-primary"> Listing</span></h2>
                            <ul class="b-isotope-filter list-unstyled">
                                <li class="current"><a href="" data-filter="*">Show All</a></li>
                                <li><a href="" data-filter=".bmw">BMW</a></li>
                                <li><a href="" data-filter=".honda">Honda</a></li>
                                <li><a href="" data-filter=".mercedes">Mercedes</a></li>
                                <li><a href="" data-filter=".rover">Range Rover</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="b-isotope-grid grid list-unstyled row">
                        <li class="grid-sizer col-lg-4 col-md-6"></li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web honda">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/360x260/1.jpg')}}" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Jaguar GX 490i</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$30,480</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web bmw">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/360x260/2.jpg')}}" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span class="b-goods-f__label bg-primary">NEW</span><span>Volkswagen Tiguan</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$45,800</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web honda">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/360x260/3.jpg')}}" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Tesla Model RX3</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$18,250</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web rover">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/360x260/4.jpg')}}" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Lexus RC 3500</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$26,080</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web mercedes">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/360x260/5.jpg')}}" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Mercedes SX</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$66,500</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web bmw">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="{{url('theme/assets/media/content/b-goods/360x260/6.jpg')}}" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Porsche 911 Targa</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$35,700</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                    </ul>
                </div>
            </section>
         
            <!-- end .b-steps-->
            <section class="b-bnr-2 section-default">
                <div class="b-bnr-2__figure"><img class="b-bnr-2__img img-fluid" src="{{url('theme/assets/media/content/b-bnr/1.png')}}" alt="auto" /></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="b-bnr-2__section b-bnr-2__section_first bg-dark">
                                <h2 class="b-bnr-2__title">Are you looking to<br>buy a new car?</h2><a class="b-bnr-2__link" href="#">Start searching our inventory that includes 2000+ cars</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="b-bnr-2__section b-bnr-2__section_second bg-primary">
                                <div class="b-bnr-2__title">Are you looking to
                                    <br>sell your car?</div><a class="b-bnr-2__link" href="#">Add your vehicle to inventory & reach 3k potential buyers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-bnr-->
            <div class="section-goods-vip">
                <a class="b-goods-vip b-goods-vip_1" href="#">
                    <div class="b-goods-vip__main"><span class="b-goods-vip__label b-goods-vip__label-1 bg-primary">NEW</span>
                        <div class="b-goods-vip__title">AUDI Q2L (2019)</div>
                        <div class="b-goods-vip__subtitle">LUXURTY APART -<span class="b-goods-vip__price"> $499/M</span></div>
                        <ul class="b-goods-vip__list list-unstyled">
                            <li class="b-goods-vip__list-item">2019</li>
                            <li class="b-goods-vip__list-item">Manual</li>
                            <li class="b-goods-vip__list-item">Petrol</li>
                            <li class="b-goods-vip__list-item">661 hp</li>
                        </ul>
                    </div>
                </a>
                <a class="b-goods-vip b-goods-vip_2" href="#">
                    <div class="b-goods-vip__main"><span class="b-goods-vip__label b-goods-vip__label-2 bg-primary">As Low As<strong class="b-goods-vip__label_b"> 1.5% APR</strong></span>
                        <div class="b-goods-vip__subtitle">Off-Road King</div>
                        <div class="b-goods-vip__title">JAGUAR I PACE</div>
                        <div class="b-goods-vip__slogan">Limited Time Offer</div>
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
            <!-- end .b-goods-->
            <section class="section-team section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="ui-title-slogan">Helps you to find perfect car</div>
                                <h2 class="ui-title">Our Sales<span class="text-primary"> Team</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="b-team">
                                <div class="b-team__media">
                                    <div class="b-team__img"><img class="img-fluid" src="{{url('theme/assets/media/content/b-team/1.jpg')}}" alt="Foto" /></div>
                                    <ul class="b-team__soc list-unstyled">
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="b-team__inner bg-dark">
                                    <div class="b-team__name">Alex Leeman</div>
                                    <div class="b-team__category">Director</div>
                                </div>
                                <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="b-team">
                                <div class="b-team__media">
                                    <div class="b-team__img"><img class="img-fluid" src="{{url('theme/assets/media/content/b-team/2.jpg')}}" alt="Foto" /></div>
                                    <ul class="b-team__soc list-unstyled">
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="b-team__inner bg-dark">
                                    <div class="b-team__name">Diago Johnson</div>
                                    <div class="b-team__category">Sales Manager</div>
                                </div>
                                <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="b-team">
                                <div class="b-team__media">
                                    <div class="b-team__img"><img class="img-fluid" src="{{url('theme/assets/media/content/b-team/3.jpg')}}" alt="Foto" /></div>
                                    <ul class="b-team__soc list-unstyled">
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="b-team__inner bg-dark">
                                    <div class="b-team__name">Sophia Lauren</div>
                                    <div class="b-team__category">Co-Founder</div>
                                </div>
                                <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="b-team">
                                <div class="b-team__media">
                                    <div class="b-team__img"><img class="img-fluid" src="{{url('theme/assets/media/content/b-team/4.jpg')}}" alt="Foto" /></div>
                                    <ul class="b-team__soc list-unstyled">
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="b-team__inner bg-dark">
                                    <div class="b-team__name">William Henry</div>
                                    <div class="b-team__category">Marketing</div>
                                </div>
                                <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-team-->
           
            
            <section class="b-bnr-3 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="b-bnr-3__title ui-tilte">Buy Sell Your Car Quickly & Easily with Revus</h2>
                            <div class="b-bnr-3__info">Labore dolore magna aliqua minim ipsum sed ipsumveniam quis nostrud exercitation</div><a class="b-bnr-3__btn btn btn-primary" href="#">get rigistered</a>
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
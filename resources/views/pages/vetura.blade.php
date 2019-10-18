@extends('layouts.main')

@section('content')

<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Vehicle details</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vehicle details</li>
                      </ol>
                      <!-- end breadcrumb-->
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end .b-title-page-->
  
            
                  <div class="l-main-content">
        <div class="container">
          <section class="b-goods-f">
              
              
              <div class="row">
              <div class="col-lg-8">
                <div class="ui-subtitle">new seventh-generation 3 Series sedan</div>
                <h1 class="ui-title text-uppercase">BMW 3 Series 2019</h1>
               
              </div>
              <div class="col-lg-4">
                <div class="b-goods-f-price">
                  <div class="b-goods-f-price__inner">
                    <div class="b-goods-f-price__msrp">MSRP:<strong> $34,500</strong></div>
                    <div class="b-goods-f-price__main bg-primary">$30,480</div>
                  </div>
                  <div class="b-goods-f-price__note">Included Taxes &amp; Checkup*</div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-8">
                <div class="b-goods-f__links"><a class="b-goods-f__links-item" href="#"><i class="ic fas fa-map-marker-alt text-primary"></i>Moscow, RU</a><a class="b-goods-f__links-item" href="#"><i class="ic fas fa-question text-primary"></i>Request More Info</a><a class="b-goods-f__links-item" href="#"><i class="ic fas fa-star text-primary"></i>Add To Favourite</a><a class="b-goods-f__links-item" href="#"><i class="ic fas fa-car-side text-primary"></i>Schedule Test Drive</a><a class="b-goods-f__links-item" href="email:test@test.test"><i class="ic fas fa-envelope text-primary"></i>Email Friend</a></div>
                <div class="b-goods-f__slider">
                  <div class="ui-slider-main js-slider-for slick-initialized slick-slider">
                  	<div class="slick-list draggable">
                  		<div class="slick-track" style="opacity: 1; width: 3750px;">
                  			<div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 730px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1"><div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/main/1.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  		<div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 730px; position: relative; left: -750px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/main/2.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  		<div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 730px; position: relative; left: -1500px; top: 0px; z-index: 999; opacity: 1;">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/main/1.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  		<div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 730px; position: relative; left: -2250px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/main/2.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  		<div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 730px; position: relative; left: -3000px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/main/1.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  	</div>
                  </div>
              </div>
                  <div class="ui-slider-nav js-slider-nav slick-initialized slick-slider"><div class="slick-list draggable">
                  	<div class="slick-track" style="opacity: 1; width: 750px; transform: translate3d(-300px, 0px, 0px);">
                  		<div class="slick-slide slick-active" data-slick-index="0" aria-hidden="false" style="width: 130px;" tabindex="-1">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/thumb/1.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  		<div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 130px;" tabindex="-1">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/thumb/2.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  		<div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 130px;">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/thumb/3.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  		<div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 130px;">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/thumb/4.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  		<div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 130px;">
                  			<div>
                  				<img class="img-scale" src="{{url('theme/assets/media/content/b-goods/main-slider/thumb/5.jpg')}}" alt="foto" style="width: 100%; display: inline-block;">
                  			</div>
                  		</div>
                  	</div>
                  </div>
              </div>
                </div>
                <h2 class="b-goods-f__title">Vehicle Specifications</h2>
                <div class="row">
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Registration</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">2019</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Brand / Model</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">BMW 3 Series</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Body Style</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">Sedan</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Color</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">Fanta Red</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Fuel Type</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">Gasoline</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Engine</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">255 hp @5000 rpm</dd>
                    </dl>
                  </div>
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Condition</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">New</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Mileage</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">20,000 mi</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Transmission</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">8-Speed A/T</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Drivetrain</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">All Wheels Drive</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Interior Color</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">Black / Red</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">No. Of Seats</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">5</dd>
                    </dl>
                  </div>
                </div>
                <ul class="nav nav-tabs nav-vehicle-detail-tabs" id="myTab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a></li>
                  <li class="nav-item"><a class="nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="false">Features & Options</a></li>
                  <li class="nav-item"><a class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false">Vehicle Location</a></li>
                  <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Owner Reviews</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <p>Edipisicing eiusmod tempor incididunt labore sed dolore magna aliqa enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi ut aliquip laboris nisi ut aliquip ex ea commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><strong>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</strong> nisi ut aliquip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exe pteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed umt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                    <h3 class="b-goods-f__title-inner">General Information</h3>
                    <ul class="list list-mark-2">
                      <li>Enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi</li>
                      <li>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</li>
                      <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
                      <li>Laboris nisi ut aliquip ex ea comodo consequat duis aute irure dolor in</li>
                      <li>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                    <p>Edipisicing eiusmod tempor incididunt labore sed dolore magna aliqa enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi ut aliquip laboris nisi ut aliquip ex ea commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exe pteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed umt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                  </div>
                  <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <ul class="list list-mark-2">
                      <li>Enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi</li>
                      <li>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</li>
                      <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
                      <li>Laboris nisi ut aliquip ex ea comodo consequat duis aute irure dolor in</li>
                      <li>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <aside class="l-sidebar">
                    
                    
                  <div class="b-seller">
                    <div class="b-seller__header">
                      <div class="b-seller__img"><img class="img-scale" src="{{url('theme/assets/media/content/b-seller/1.jpg')}}" alt="foto"/></div>
                      <div class="b-seller__title">
                        <div class="b-seller__name">Joseph Kane</div>
                        <div class="b-seller__category">Member Since August 2001</div>
                      </div>
                    </div>
                    <div class="b-seller__main"><i class="b-seller__ic fas fa-phone text-primary"></i>
                      <div class="b-seller__contact"><span class="d-block">Contact Seller</span><a class="b-seller__phone" href="tel:12584037961">1 (258) 403 7961</a></div>
                      <ul class="b-seller-soc list-unstyled">
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-linkedin"></i></a></li>
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-google-plus-g"></i></a></li>
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-pinterest"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end .b-seller-->
                  
                  <div class="widget section-sidebar bg-gray widget-selecr-contact">
                      <h3 class="widget-title bg-dark"><i class="ic icon_mail_alt"></i>Message Seller</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        <form>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name"/>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" placeholder="Message" rows="4"></textarea>
                          </div>
                          <button class="btn btn-red btn-lg w-100">Send now</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="widget section-sidebar bg-gray">
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-money"></i>Find installment</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        <form>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Loan Amount*"/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Down Payment*"/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Months Period*"/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Interest Rate*"/>
                          </div>
                          <button class="btn btn-border btn-lg w-100">Estimate payment</button>
                        </form>
                      </div>
                    </div>
                    <!-- end .widget-->
                    
                  </div>
                </aside>
              </div>
            </div>
          </section>
          <!-- end .b-goods-f-->
          
        </div>
      </div>

      @endsection
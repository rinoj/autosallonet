@extends('layouts.main')

@section('head')
@include('meta::manager', [
    'title'         => $vetura->marka->emri.' '.$vetura->modeli->emri.' - '.$vetura->salloni->emri,
    'description'   => 'Gjej veturën tënde të preferuar.',
    'image'         => url('images/veturat/'. $vetura->images[0]->filename)
])
@endsection

@section('content')

            
      <div class="l-main-content">
        <div class="container">
          <section class="b-goods-f">
              
              
              <div class="row">
              <div class="col-lg-8">
                <div class="ui-subtitle">new seventh-generation 3 Series sedan</div>
                <h1 class="ui-title text-uppercase">{{$vetura->marka->emri}} {{$vetura->modeli->emri}}</h1>
               
              </div>
              <div class="col-lg-4">
                <div class="b-goods-f-price">
                  <div class="b-goods-f-price__inner">
                    <div class="b-goods-f-price__msrp"><strong></strong></div>
                    <div class="b-goods-f-price__main bg-primary">€ {{number_format($vetura->cmimi)}}</div>
                  </div>
                  <div class="b-goods-f-price__note"></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-8">


                <div class="b-goods-f__links">
                  <a class="b-goods-f__links-item" href="#"><i class="ic fas fa-map-marker-alt text-primary"></i>{{$vetura->salloni->adresa}}</a>
                  <a class="b-goods-f__links-item" href="#"><i class="ic fab fa-facebook text-primary"></i>Faqja e AutoSallonit</a>
                  <a class="b-goods-f__links-item" href="#"><i class="ic fas fa-car-side text-primary"></i>Më shumë vetura nga {{$vetura->salloni->emri}}</a>
                </div>
                  <div class="slider slider-for">
                 @foreach($vetura->images as $image)
                  <div>
                    <img style="max-width: 100%; height: auto; " src="{{url('images/veturat/'. $image->filename)}}"/>
                  </div>
                  @endforeach
                </div>
                <div class="slider slider-nav">
                  @foreach($vetura->images as $image)
                  <div>
                    <img style="max-width: 100%; height: auto; " src="{{url('images/veturat/'. $image->filename)}}"/>
                  </div>
                  @endforeach
                </div>

                <h2 class="b-goods-f__title">Specifikat</h2>
                <div class="row">
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Viti</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->viti}}</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Modeli</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->modeli->emri}}</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Ngjyra</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->ngjyra}}</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Lënda Djegëse</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->lenda}}</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Kubikazha</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->kubikazha}}</dd>
                    </dl>
                  </div>
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Dyer</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->dyer}}</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">KM</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{number_format($vetura->km)}} km</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Marshi</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->marshi}}</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Interieri</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->interier}}</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">I doganuar</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">{{$vetura->doganuar ? 'Po' : 'Jo'}}</dd>
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
                        <div class="b-seller__name">{{$vetura->salloni->emri}}</div>
                        <div class="b-seller__category"></div>
                      </div>
                    </div>
                    <div class="b-seller__main"><i class="b-seller__ic fas fa-phone text-primary"></i>
                      <div class="b-seller__contact"><span class="d-block">Kontakto Sallonin</span><a class="b-seller__phone" href="tel:12584037961">{{$vetura->salloni->telefoni}}</a></div>
                      <ul class="b-seller-soc list-unstyled">
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end .b-seller-->

                            
                  <div class="widget section-sidebar bg-gray widget-selecr-contact">
                    <h3 class="widget-title bg-dark"><i class="ic icon_mail_alt"></i>Komentoni</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        
                  <div id="disqus_thread"></div>
                      </div>
                    </div>
                  </div>
                  
                </aside>
              </div>
            </div>
          </section>
          <!-- end .b-goods-f-->
          
        </div>
      </div>

      @endsection

      @section('homejs')
 
    <script type="text/javascript">
        $(document).ready(function(){       
 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
    
        });
</script>

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://https-autosallonet-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      @endsection
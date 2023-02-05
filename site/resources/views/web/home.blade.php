@extends('layout.web')
@section('title', __('home.home'))
@section('navBarStyle', 'dark')
@section('head')
@endsection
@section('content')
<section class="wrapper bg-dark">
      <div class="swiper-container swiper-thumbs-container swiper-fullscreen nav-dark swiper-container-0" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="false" data-items="1" data-thumbs="true">
        <div class="swiper-main"><div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
          <div class="swiper-wrapper" style="cursor: grab; transform: translate3d(-4320px, 0px, 0px); transition-duration: 500ms;" id="swiper-wrapper-5ee3a3a79ef941d4" aria-live="off">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg28.jpg" style="background-image: url(&quot;./assets/img/photos/bg28.jpg&quot;); width: 1440px;" role="group" aria-label="1 / 4"></div>
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg29.jpg" style="background-image: url(&quot;./assets/img/photos/bg29.jpg&quot;); width: 1440px;" role="group" aria-label="2 / 4"></div>
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image swiper-slide-prev" data-image-src="./assets/img/photos/bg30.jpg" style="background-image: url(&quot;./assets/img/photos/bg30.jpg&quot;); width: 1440px;" role="group" aria-label="3 / 4"></div>
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image swiper-slide-active" data-image-src="./assets/img/photos/bg31.jpg" style="background-image: url(&quot;./assets/img/photos/bg31.jpg&quot;); width: 1440px;" role="group" aria-label="4 / 4"></div>
          </div>
          <!--/.swiper-wrapper -->
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div><div class="swiper-controls"><div class="swiper-navigation"><div class="swiper-button swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-5ee3a3a79ef941d4" aria-disabled="false"></div><div class="swiper-button swiper-button-next swiper-button-disabled" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-5ee3a3a79ef941d4" aria-disabled="true"></div></div></div></div>
        <!-- /.swiper -->
        <div class="swiper swiper-thumbs swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
          <div class="swiper-wrapper" id="swiper-wrapper-addea772d7bf0bef" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 500ms;">
            <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 40px; margin-right: 10px;" role="group" aria-label="1 / 4"><img src="./assets/img/photos/bg28-th.jpg" srcset="./assets/img/photos/bg28-th@2x.jpg 2x" alt=""></div>
            <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="width: 40px; margin-right: 10px;" role="group" aria-label="2 / 4"><img src="./assets/img/photos/bg29-th.jpg" srcset="./assets/img/photos/bg29-th@2x.jpg 2x" alt=""></div>
            <div class="swiper-slide swiper-slide-visible" style="width: 40px; margin-right: 10px;" role="group" aria-label="3 / 4"><img src="./assets/img/photos/bg30-th.jpg" srcset="./assets/img/photos/bg30-th@2x.jpg 2x" alt=""></div>
            <div class="swiper-slide swiper-slide-visible swiper-slide-thumb-active" role="group" aria-label="4 / 4" style="width: 40px; margin-right: 10px;"><img src="./assets/img/photos/bg31-th.jpg" srcset="./assets/img/photos/bg31-th@2x.jpg 2x" alt=""></div>
          </div>
          <!--/.swiper-wrapper -->
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <!-- /.swiper -->
        
        <!-- /.swiper-static -->
      </div>
      <!-- /.swiper-container -->
    </section>
	<!-- <section class="wrapper bg-dark">
	  <div class="swiper-container swiper-thumbs-container swiper-fullscreen nav-dark" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="false" data-items="1" data-thumbs="true">
	    <div class="swiper">
	      <div class="swiper-wrapper">
	        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/1_.jpg"></div>
	        <!-- <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg29.jpg"></div>
	        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg30.jpg"></div>
	        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg31.jpg"></div> -->
	      </div>
	      <!--/.swiper-wrapper -->
	    </div>
	    <!-- /.swiper -->
	    <div class="swiper swiper-thumbs">
	      <div class="swiper-wrapper">
	        <div class="swiper-slide"><img src="./assets/img/photos/bg28-th.jpg" srcset="./assets/img/photos/bg28-th@2x.jpg 2x" alt="" /></div>
	        <!-- <div class="swiper-slide"><img src="./assets/img/photos/bg29-th.jpg" srcset="./assets/img/photos/bg29-th@2x.jpg 2x" alt="" /></div>
	        <div class="swiper-slide"><img src="./assets/img/photos/bg30-th.jpg" srcset="./assets/img/photos/bg30-th@2x.jpg 2x" alt="" /></div>
	        <div class="swiper-slide"><img src="./assets/img/photos/bg31-th.jpg" srcset="./assets/img/photos/bg31-th@2x.jpg 2x" alt="" /></div> -->
	      </div>
	      <!--/.swiper-wrapper -->
	    </div>
	    <!-- /.swiper -->
	    <div class="swiper-static">
	      <div class="container h-100 d-flex align-items-center justify-content-center">
	        <div class="row">
	          <div class="col-lg-12 mx-auto mt-n10 text-center">
	            <h1 class="fs-19 text-uppercase ls-xl text-white mb-3 animate__animated animate__zoomIn animate__delay-1s d-none d-md-block">{{ __('home.title1') }} <br/> {{ __('home.title1-1') }} </h1>
	            <h2 class="display-1 fs-60 text-white mb-0 animate__animated animate__zoomIn animate__delay-2s">{{ __('home.home-h1') }}</h2>
				<a href="{{route(App::getLocale().'.contact')}}" class="btn btn-sm btn-primary rounded-pill">{{ __('home.need') }}</a>
	          </div>
	          <!-- /column -->
	        </div>
	        <!-- /.row -->
	      </div>
	      <!-- /.container -->
	    </div>
	    <!-- /.swiper-static -->
	  </div>
	  <!-- /.swiper-container -->
	</section> 
	<!-- /section -->
	<section class="wrapper bg-light">
	  <div class="container py-14 py-md-6">
	    <div class="row">
	      <div class="col-lg-12 col-xl-10 col-xxl-7 mx-auto text-center">
		  <img src="./assets/img/icons/lineal/stars.svg" class="svg-inject icon-svg icon-svg-sm text-primary text-leaf fs-30 opacity-25" alt="" />
	        <h2 class="display-5 text-center mt-2 mb-10">{{ __('home.welcome') }}</h2>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	    <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="#"><img class="img-fluid" src="./assets/img/photos/fs1.jpg" srcset="./assets/img/photos/fs1.jpg" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">{{ __('home.view') }}</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">Airport Concierge</h3>
	          </div>
	          <!--/.card-body -->
	        </div>
	        <!-- /.card -->
	      </div>
	      <!--/column -->
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="#"><img class="img-fluid" src="./assets/img/photos/fs2.jpg" srcset="./assets/img/photos/fs2.jpg" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">{{ __('home.view') }}</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">{{ __('home.luxury') }}</h3>
	          </div>
	          <!--/.card-body -->
	        </div>
	        <!-- /.card -->
	      </div>
	      <!--/column -->
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="#"><img class="img-fluid" src="./assets/img/photos/fs3.jpg" srcset="./assets/img/photos/fs3.jpg" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">{{ __('home.view') }}</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">Security Services</h3>
	          </div>
	          <!--/.card-body -->
	        </div>
	        <!-- /.card -->
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	  </div>
	  <!-- /.container -->
	</section>
	<!-- /section -->
	<!-- /section -->
	<section class="wrapper bg-soft-primary">
	  <div class="overflow-hidden">
	    <div class="container py-4 py-md-4">
	      <div class="row">
	        <div class="col-xl-7 col-xxl-6 mx-auto text-center">
			  <i class="uil uil-car-sideview text-leaf fs-30 opacity-25"></i>
	          <h2 class="display-5 text-center mt-2 mb-10">{{ __('home.offer') }}</h2>
	        </div>
	        <!--/column -->
	      </div>
	      <!--/.row -->
	      <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-lg="4" data-items-md="3" data-items-xs="1">
	        <div class="swiper overflow-visible pb-2">
	          <div class="swiper-wrapper">
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-sedan-mercedes-s-class.jpeg" srcset="./assets/img/photos/fleet-sedan-mercedes-s-class.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SEDAN</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Mercedes S Class
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">3 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">3 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-sedan-mercedes-e-class-compressor.jpeg" srcset="./assets/img/photos/fleet-sedan-mercedes-e-class-compressor.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SEDAN</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Mercedes E Class
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">3 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">3 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-sedan-mercedes-c-class-compressor.jpeg" srcset="./assets/img/photos/fleet-sedan-mercedes-c-class-compressor.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SEDAN</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Mercedes C Class
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">3 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">3 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-sedan-bmw-compressor.jpeg" srcset="./assets/img/photos/fleet-sedan-bmw-compressor.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SEDAN</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">7 Series BMW
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">3 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">3 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-sedan-jaguar-compressor.jpeg" srcset="./assets/img/photos/fleet-sedan-jaguar-compressor.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SEDAN</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Jaguar XJ
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">3 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">3 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-sedan-acura-compressor-1.jpeg" srcset="./assets/img/photos/fleet-sedan-acura-compressor-1.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SEDAN</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Acura TL
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">3 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">3 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
<!--/.swiper-slide -->
<div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-suv-viano-compressor-1.jpeg" srcset="./assets/img/photos/fleet-suv-viano-compressor-1.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SUV</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Viano
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">6 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">4 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->

<!--/.swiper-slide -->
<div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-suv-suburban-compressor-1.jpeg" srcset="./assets/img/photos/fleet-suv-suburban-compressor-1.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SUV</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Suburban
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">6 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">6 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->


<!--/.swiper-slide -->
<div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-suv-escalade-compressor-1.jpeg" srcset="./assets/img/photos/fleet-suv-escalade-compressor-1.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">SUV</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Escalade
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">6 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">6 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->


<!--/.swiper-slide -->
<div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-minicoach-sprinter-compressor.jpeg" srcset="./assets/img/photos/fleet-minicoach-sprinter-compressor.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">MINICOACH</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Sprinter
</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">16 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">10 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->


				<div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/fleet-coach-irizarpb-compressor-1.jpeg" srcset="./assets/img/photos/fleet-coach-irizarpb-compressor-1.jpeg" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">COACH</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Scania Irizar PB

</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date">47 x <i class="uil uil-user"></i>{{ __('home.pax') }}</li>
	                        <li class="post-comments">47 x <i class="uil uil-suitcase"></i>{{ __('home.lug') }}</li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->

	          </div>
	          <!--/.swiper-wrapper -->
	        </div>
	        <!-- /.swiper -->
	      </div>
	      <!-- /.swiper-container -->
	    </div>
	    <!-- /.container -->
	  </div>
	  <!-- /.overflow-hidden -->
	</section>
	<!-- /section -->
	<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/gs23_01.jpg">
	  <div class="container py-14 py-md-17 text-center">
	  <img src="./assets/img/icons/solid/employees.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-white fs-30 opacity-50" alt="" />
	    <div class="row mt-3">
	      <div class="col-xl-9 col-xxl-8 mx-auto">
	        <div class="swiper-container dots-light dots-closer mb-6" data-margin="30" data-dots="true" data-swiper='{"speed":"400", "spaceBetween":"40"}'>
	          <div class="swiper">
	            <div class="swiper-wrapper">
	              <div class="swiper-slide">
	                <blockquote class="border-0 fs-24 mb-0">
	                  <p>{{ __('home.clients') }}</p>
	                  <div class="blockquote-details justify-content-center">
	                    <div class="info p-0">
	                      <h6 class="mb-0 text-white">{{ __('home.service') }}</h6>
	                    </div>
	                  </div>
	                </blockquote>
	              </div>
	              <!--/.swiper-slide -->
	              <div class="swiper-slide">
	                <blockquote class="border-0 fs-24 mb-0">
	                  <p>{{ __('home.selection') }} </p>
	                  <div class="blockquote-details justify-content-center">
	                    <div class="info p-0">
	                      <h6 class="mb-0 text-white">{{ __('home.unique') }}</h6>
	                    </div>
	                  </div>
	                </blockquote>
	              </div>
	              <!--/.swiper-slide -->
	              <div class="swiper-slide">
	                <blockquote class="border-0 fs-24 mb-0">
	                  <p>{{ __('home.wepride') }}</p>
	                  <div class="blockquote-details justify-content-center">
	                    <div class="info p-0">
	                      <h6 class="mb-0 text-white">{{ __('home.tradi') }}</h6>
	                    </div>
	                  </div>
	                </blockquote>
	              </div>
	              <!--/.swiper-slide -->
	            </div>
	            <!--/.swiper-wrapper -->
	          </div>
	          <!--/.swiper -->
	        </div>
	        <!-- /.swiper-container -->
	      </div>
	      <!-- /column -->
	    </div>
	    <!-- /.row -->
	  </div>
	  <!-- /.container -->
	</section>
	<!-- /section -->
	<section class="wrapper bg-soft-primary">
	  <div class="container py-8 py-md-8">
	    <div class="row">
	      <div class="col-xl-9 col-xxl-7 mx-auto text-center">
		  <img src="./assets/img/icons/solid/employees.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-leaf fs-30 " alt="" />
	        <h2 class="display-5 text-center mt-2 mb-10">{{ __('home.wehave') }}</h2>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	    <div class="row text-center">
	      <div class="col-xl-9 mx-auto">
	        <div class="player" data-plyr-provider="vimeo" data-plyr-embed-id="793483613"></div>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	  </div>
	  <!-- /.container -->
	</section>
	<!-- /section -->
	<section class="wrapper bg-light">
	  <div class="overflow-hidden">
	    <div class="container py-8 py-md-8">
	      <div class="row">
	        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
			<img src="./assets/img/icons/lineal/paper-plane.svg" class="svg-inject icon-svg icon-svg-sm text-primary opacity-25" alt="" />
	          <h2 class="display-5 text-center mt-2 mb-10">{{ __('home.ready') }}
<br class="d-none d-md-block"> {{ __('home.explore') }}  </h2>
	        </div>
	        <!--/column -->
	      </div>
	      <!--/.row -->
	      <div class="swiper-container grid-view nav-bottom nav-color mb-14 text-center" data-margin="30" data-dots="false" data-nav="true" data-items-md="5" data-items-xs="1">
	        <div class="swiper overflow-visible pb-2">
	          <div class="swiper-wrapper">
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/mex.jpeg" srcset="./assets/img/photos/mex.jpeg" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Ciudad de México</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                    <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/punta.jpeg" srcset="./assets/img/photos/punta.jpeg" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Punta Cana</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/mty.jpeg" srcset="./assets/img/photos/mty.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Monterrey</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="/contact"><img class="img-fluid" src="./assets/img/photos/sao.jpeg" srcset="./assets/img/photos/sao.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Sao Paulo</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/cun.jpeg" srcset="./assets/img/photos/cun.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Cancún</h3>
	                  <ul class="post-meta fs-16 mb-0">
						<li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/bogota.jpeg" srcset="./assets/img/photos/bogota.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Bogotá</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/gdl.jpeg" srcset="./assets/img/photos/gdl.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Guadalajara</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/chile.jpeg" srcset="./assets/img/photos/chile.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Santiago de Chile</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/rep.jpeg" srcset="./assets/img/photos/rep.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Republica Dominicana</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/miami.jpeg" srcset="./assets/img/photos/miami.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Miami</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/ny.jpeg" srcset="./assets/img/photos/ny.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">New York</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/la.jpeg" srcset="./assets/img/photos/la.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Los Angeles</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/buenos.jpeg" srcset="./assets/img/photos/buenos.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Buenos Aires</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/puerto.jpeg" srcset="./assets/img/photos/puerto.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Puerto Vallarta</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/medellin.jpeg" srcset="./assets/img/photos/medellin.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Medellín</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->

				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/vegas.jpeg" srcset="./assets/img/photos/vegas.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Las Vegas</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->

				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/hawai.jpeg" srcset="./assets/img/photos/hawai.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Hawai</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->

				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/lima.jpeg" srcset="./assets/img/photos/lima.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Lima</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->

				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/orlando.jpeg" srcset="./assets/img/photos/orlando.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Orlando</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->

				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/atlanta.jpeg" srcset="./assets/img/photos/atlanta.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Atlanta</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->

				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/santo.jpeg" srcset="./assets/img/photos/santo.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Santo Domingo</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->

				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/cusco.jpeg" srcset="./assets/img/photos/cusco.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Cusco</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->

				
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/panama.jpeg" srcset="./assets/img/photos/panama.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Panama</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/corea.jpeg" srcset="./assets/img/photos/corea.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Corea del Sur</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/guatemala.jpeg" srcset="./assets/img/photos/guatemala.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Guatemala</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/francia.jpeg" srcset="./assets/img/photos/francia.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Francia</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/rico.jpeg" srcset="./assets/img/photos/rico.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Puerto Rico</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/alemania.jpeg" srcset="./assets/img/photos/alemania.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Alemania</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/españa.jpeg" srcset="./assets/img/photos/españa.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">España</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/japon.jpeg" srcset="./assets/img/photos/japon.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Japón</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/dallas.jpeg" srcset="./assets/img/photos/dallas.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Dallas</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/sansalvador.jpeg" srcset="./assets/img/photos/sansalvador.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">San Salvador</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/montevideo.jpeg" srcset="./assets/img/photos/montevideo.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Monte Video</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/liberia.jpeg" srcset="./assets/img/photos/liberia.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Liberia Costa Rica</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/sanjose.jpeg" srcset="./assets/img/photos/sanjose.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">San José Costa Rica</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/rio.jpeg" srcset="./assets/img/photos/rio.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Rio de Janeiro</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
				<div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/puntaeste.jpeg" srcset="./assets/img/photos/puntaeste.jpeg" alt="" /></a>
	                  <figcaption>
					  <h5 class="from-top mb-0">{{ __('home.info') }}</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Punta Este</h3>
	                  <ul class="post-meta fs-16 mb-0">
					  <li><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('home.book') }}</a></li>
	                  </ul>
	                </div>
	                <!--/.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!--/.swiper-slide -->
	          </div>
	          <!--/.swiper-wrapper -->
	        </div>
	        <!-- /.swiper -->
	      </div>
	      <!-- /.swiper-container -->
	    </div>
	    <!-- /.container -->
	  </div>
	  <!-- /.overflow-hidden -->
	</section>
	<!-- /section -->
	<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/bg33.jpg">
	  <div class="container py-14 py-md-17 text-center">
	    <div class="row">
	      <div class="col-xl-10 col-xxl-8 mx-auto text-center">
		    <i class="uil uil-bus-school text-white fs-50 opacity-50"></i>
	        <h2 class="display-4 text-white mt-2 mb-7">{{ __('home.safety') }}</h2>
	        <a href="#" class="btn btn-white rounded-pill mb-5">{{ __('home.contactus') }}</a>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	  </div>
	  <!-- /.container -->
	</section>
	<!-- /section -->
	<section class="wrapper bg-light">
	  <div class="container pt-6 pt-md-7 pb-14 pb-md-16">
	    <div class="row gx-md-8 gx-xl-12 gy-6 align-items-center">
	      <div class="col-md-8 col-lg-6 mx-auto">
	        <div class="img-mask mask-1"><img src="./assets/img/photos/about29.jpg" srcset="./assets/img/photos/about29.jpg 2x" alt="" /></div>
	      </div>
	      <!--/column -->
	      <div class="col-lg-6">
	        <h2 class="display-5 mb-5">{{ __('home.hello') }}</h2>
	        <p class="mb-6"></p>
	        <div class="row counter-wrapper gy-6">
	          <div class="col-md-6">
	            <h3 class="counter">500K+</h3>
	            <p>{{ __('home.prov') }}</p>
	          </div>
	          <!--/column -->
	          <div class="col-md-6">
	            <h3 class="counter">500+</h3>
	            <p>{{ __('home.happy') }}</p>
	          </div>
	          <!--/column -->
	          <!-- <div class="col-md-4">
	            <h3 class="counter">25</h3>
	            <p>Awards Won</p>
	          </div> -->
	          <!--/column -->
	        </div>
	        <!--/.row -->
	      </div>
	      <!--/column -->
	    </div>
	    <!-- /.row -->
	    <div class="row gx-md-8 gx-xl-12 gy-6 mt-2">
	      <div class="col-lg-4">
	        <!-- <h3>My Skills</h3> -->
	        <p>{{ __('home.wewill') }}</p>
	        <ul class="progress-list">
	          <li>
	            <p>{{ __('home.confi') }}</p>
	            <div class="progressbar line soft-primary" data-value="100"></div>
	          </li>
	          <li>
	            <p>{{ __('home.acce') }}</p>
	            <div class="progressbar line soft-primary" data-value="100"></div>
	          </li>
	          <li>
	            <p>{{ __('home.perfe') }}</p>
	            <div class="progressbar line soft-primary" data-value="100"></div>
	          </li>
	          <!-- <li>
	            <p>Manupilation</p>
	            <div class="progressbar line soft-primary" data-value="75"></div>
	          </li> -->
	        </ul>
	        <!-- /.progress-list -->
	      </div>
	      <!-- /column -->
	      <div class="col-lg-4 text-justify">
	        <h3>Why Choose Me?</h3>
	        <p class="text-justify">{{ __('home.business') }}</p>
	        <ul class="icon-list bullet-bg bullet-soft-primary">
			  <li><i class="uil uil-check"></i>{{ __('home.hon') }}</li>
			  <li><i class="uil uil-check"></i>{{ __('home.pun') }}</li>
			  <li><i class="uil uil-check"></i>{{ __('home.sec') }}</li>
	          <li><i class="uil uil-check"></i>{{ __('home.res') }}</li>
				
				<li><i class="uil uil-check"></i>{{ __('home.gra') }}</li>
	          <li><i class="uil uil-check"></i>{{ __('home.clean') }}</li>
	          <li><i class="uil uil-check"></i>{{ __('home.ethics') }}</li>
	          <li><i class="uil uil-check"></i>{{ __('home.prese') }}</li>
				
	        </ul>
	      </div>
	      <!-- /column -->
	      <div class="col-lg-4">
	        <h3>{{ __('home.process') }}</h3>
	        <div class="d-flex flex-row mb-5">
	          <div>
	            <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">1</span></span>
	          </div>
	          <div>
	            <h5 class="mb-1">{{ __('home.how') }}</h5>
	            <p class="mb-0">{{ __('home.this') }}</p>
	          </div>
	        </div>
	        <div class="d-flex flex-row mb-5">
	          <div>
	            <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">2</span></span>
	          </div>
	          <div>
	            <h5 class="mb-1">{{ __('home.easy') }}</h5>
	            <p class="mb-0">{{ __('home.fill') }}</p>
	          </div>
	        </div>
	        <div class="d-flex flex-row">
	          <div>
	            <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">3</span></span>
	          </div>
	          <div>
	            <h5 class="mb-1">{{ __('home.enjoytitle') }}</h5>
	            <p class="mb-0">{{ __('home.enjoy') }}</p>
	          </div>
	        </div>
	      </div>
	      <!-- /column -->
	    </div>
	    <!-- /.row -->
	  </div>
	  <!-- /.container -->
	</section>
	
@endsection
@section('scripts')
@endsection
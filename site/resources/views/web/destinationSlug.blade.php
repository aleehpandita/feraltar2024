@extends('layout.web')
@section('title', $destination->name)
@section('navBarStyle', 'dark')
@section('head')
  @parent
@endsection
@section('content')
  <!-- /header -->
  <section class="wrapper bg-dark">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="../{{$destination->main_image}}">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                    {{$destination->name}}
                    </h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">{{ __('destinations.let') }} <b>{{ $destination->name }} </b> {{ __('destinations.unfo') }}.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-primary btn-lg btn-outline-white rounded-pill">{!! __('home.need') !!}</a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </section>


    
    <section class="wrapper bg-light angled upper-end lower-end">
   <div class="container py-6 py-md-6">
      <div class="row gx-lg-8 gx-xl-12 gy-15 mb-14 mb-md-17 align-items-center">
         
      </div>
      <!--/.row -->
      <div class="row mb-5">
         <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
            <img src="../assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-4 px-lg-14">
				{{ __('about.wegive') }}
			</h2>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-6 order-lg-2">
            <div class="card me-lg-6">
               <div class="card-body p-6">
                  <div class="d-flex flex-row">
                     <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">01</span></span>
                     </div>
                     <div>
                        <h4 class="mb-1">{{ __('about.select1') }}</h4>
                        <p class="mb-0">{{ __('about.cc1') }}</p>
                     </div>
                  </div>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card ms-lg-13 mt-6">
               <div class="card-body p-6">
                  <div class="d-flex flex-row">
                     <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">02</span></span>
                     </div>
                     <div>
                        <h4 class="mb-1">{{ __('about.fill1') }}</h4>
                        <p class="mb-0">{{ __('about.please1') }}</p>
                     </div>
                  </div>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card mx-lg-6 mt-6">
               <div class="card-body p-6">
                  <div class="d-flex flex-row">
                     <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">03</span></span>
                     </div>
                     <div>
                        <h4 class="mb-1">{{ __('about.s2') }}</h4>
                        <p class="mb-0">{{ __('about.we1') }}</p>
                     </div>
                  </div>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <h2 class="display-6 mb-3">{{ __('about.how') }}</h2>
            <p class="lead fs-lg pe-lg-5"> 
               {{ __('about.our') }}
            </p>
            <!-- <p class="mb-6">Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.</p>-->
            <a href="#" class="btn btn-primary rounded-pill mb-0">{{ __('home.info') }}</a> 
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>


<section class="wrapper bg-light">
	  <div class="container py-14 py-md-6">
	    <div class="row">
	      <div class="col-lg-12 col-xl-10 col-xxl-7 mx-auto text-center">
		  <img src="../../assets/img/icons/lineal/stars.svg" class="svg-inject icon-svg icon-svg-sm text-primary text-leaf fs-30 opacity-25" alt="" />
	        <h2 class="display-5 text-center mt-2 mb-10">{!! __('home.welcome') !!}</h2>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	    <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="#"><img class="img-fluid" src="../../assets/img/photos/fs1.jpg" srcset="../../assets/img/photos/fs1.jpg" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">{{ __('home.view') }}</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">{{ __('home.ax1') }}</h3>
	          </div>
	          <!--/.card-body -->
	        </div>
	        <!-- /.card -->
	      </div>
	      <!--/column -->
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="#"><img class="img-fluid" src="../../assets/img/photos/fs2.jpg" srcset="../../assets/img/photos/fs2.jpg" alt="" /></a>
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
	            <a href="#"><img class="img-fluid" src="../../assets/img/photos/fs3.jpg" srcset="../../assets/img/photos/fs3.jpg" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">{{ __('home.view') }}</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">{{ __('home.secx') }}</h3>
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

      @endsection

      @section('scripts')
@endsection
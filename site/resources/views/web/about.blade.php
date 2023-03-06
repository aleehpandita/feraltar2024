@extends('layout.web')
@section('title', __('about.title'))
@section('keywords', __('about.keywords'))
@section('description', __('about.description'))
@section('navBarStyle', 'dark')
@section('head')
@parent
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.02.min.css">
<style>
   .autocomplete > ul[hidden], .autocomplete > ul:empty {
   display: block;
   opacity: 0;
   transform: scale(0);
   }
   .autocomplete > ul {
   position: absolute;
   max-height: 226px;
   overflow-y: scroll;
   box-sizing: border-box;
   left: 0;
   right: 0;
   margin: 0.5rem 0 0 0;
   padding: 0;
   z-index: 1;
   list-style: none;
   border-radius: 0.6rem;
   background-color: #fff;
   border: 1px solid rgba(33, 33, 33, 0.07);
   box-shadow: 0 3px 6px rgb(149 157 165 / 15%);
   outline: none;
   transition: opacity 0.15s ease-in-out;
   -moz-transition: opacity 0.15s ease-in-out;
   -webkit-transition: opacity 0.15s ease-in-out;
   }
   .autocomplete > ul > li:hover {
   cursor: pointer;
   background-color: rgba(255, 122, 122, 0.15);
   }
   .autocomplete > ul > li {
   margin: 0.3rem;
   padding: 0.3rem 0.5rem;
   text-align: left;
   font-size: 1rem;
   color: #212121;
   border-radius: 0.35rem;
   background-color: rgba(255, 255, 255, 1);
   white-space: nowrap;
   overflow: hidden;
   text-overflow: ellipsis;
   transition: all 0.2s ease;
   }
   .autocomplete > ul > .no_result {
   padding: 0.3rem 0.5rem;
   }
   .form-floating>.input-group>.form-control {
   padding-bottom: 0;
   line-height: 1.25;
   }
   .form-floating>.input-group>.form-control::placeholder {
   color: transparent;
   }
   .form-floating>.input-group>label {
   padding-top: 0.65rem;
   }
   .form-floating>.input-group>label {
   color: #959ca9;
   font-size: .75rem;
   }
   .form-floating>.input-group>label {
   position: absolute;
   top: 0;
   left: 54px;
   height: 100%;
   padding: 0.6rem 1rem;
   overflow: hidden;
   text-align: start;
   text-overflow: ellipsis;
   white-space: nowrap;
   pointer-events: none;
   border: 1px solid transparent;
   transform-origin: 0 0;
   transition: opacity .1s ease-in-out,transform .1s ease-in-out;
   }
   .form-floating>.input-group>.form-control:focus~label, .form-floating>.input-group>.form-control:not(:placeholder-shown)~label {
   opacity: 1;
   transform: scale(.8) translateY(-0.4rem) translateX(0.2rem);
   }
   .form-floating .input-group>.form-control:focus, .input-group>.form-select:focus {
   z-index: 0;
   }
   .was-validated .form-floating .input-group>.form-control:not(:focus):valid{
   z-index: 0;
   }
   .was-validated .form-floating .input-group>.form-control:not(:focus):invalid {
   z-index: 0;
   }
   /*.form-floating>.input-group>.form-control:not(:placeholder-shown) {
   padding-top: 1rem;
   padding-bottom: 0.2rem;
   }*/
</style>
<!-- Tempus Dominus Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.10/dist/css/tempus-dominus.min.css" crossorigin="anonymous">
@endsection
@section('content')
<!-- <body>
   <div class="content-wrapper"> -->
<!-- <header class="wrapper bg-gray">
   @@include('_navbar.html', {
   	"classList": "center-nav transparent navbar-light",
   	"otherClassList": "w-100 d-flex ms-auto",
   	"otherLanguageSelect": true,
   	"otherBtn": true,
   	"otherBtnClassList": "btn-sm btn-primary rounded-pill",
   	"otherBtnText": "Contact",
   	"otherBtnLink": "@@webRoot/contact.html"
   })
   </header> -->
<!-- /header -->
<section class="wrapper bg-gray">
   <!-- <div class="container pt-md-14 text-center">
      <div class="row">
      	<div class="col-xl-6 mx-auto">
      		<h1 class="display-1 mb-4">Hello! This is Sandbox</h1>
      		<p class="lead fs-lg mb-0">A company turning ideas into beautiful things.</p>
      	</div>
      </div>
      </div> -->
   <!-- /.container -->
   <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="../assets/img/photos/bg12.jpg" alt="" /></figure>
</section>

<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
   <div class="container py-6 py-md-6">
      <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
         <div class="col-lg-7 position-relative order-lg-2">
         <h2 class="display-4 mb-3 text-center">{{ __('contact.Drop-Us-a-Line') }}</h2>
            <p class="lead text-center mb-10">{{ __('contact.Reach-out') }}</p>
            <form id="form" class="contact-form needs-validation" method="post" action="{{route(App::getLocale().'.sendContact')}}" novalidate>
               <input type="hidden" name="_token" value="{{ csrf_token() }}" />
               <div class="messages"></div>
               <div class="row gx-4">
                  <div class="col-md-12">
                     <div class="form-floating mb-4 autocomplete">
                        <input id="autoComplete" name="destination" type="search" class="form-control" placeholder="Hola" required>
                        <label for="autoComplete">{{ __('contact.Destination') }} *</label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="pickup-addon1"><i class="uil uil-location-point"></i></span>
                           <input id="pickup" type="text" name="pickup" class="form-control" placeholder="Jane" required>
                           <label for="pickup">{{ __('contact.Pickup') }} *</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Pickup') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="pickup_date-addon1"><i class="uil uil-calendar-alt"></i></span>
                           <input id="pickup_date" type="text" name="pickup_date" class="form-control" placeholder="Jane" required>
                           <label for="pickup_date">{{ __('contact.Pickup Date') }} *</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Pickup Date') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="arrvial_flight-addon1"><i class="uil uil-plane-arrival"></i></span>
                           <input id="arrival_flight" type="text" name="arrival_flight" class="form-control" placeholder="Jane" >
                           <label for="arrival_flight">{{ __('contact.Arrival Flight') }}</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="dropoff-addon1"><i class="uil uil-location-point"></i></span>
                           <input id="dropoff" type="text" name="dropoff" class="form-control" placeholder="Jane" required>
                           <label for="dropoff">{{ __('contact.Dropoff') }} *</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Dropoff') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="dropoff_date-addon1"><i class="uil uil-calendar-alt"></i></span>
                           <input id="dropoff_date" type="text" name="dropoff_date" class="form-control" placeholder="Jane" required>
                           <label for="dropoff_date">{{ __('contact.Dropoff Date') }} *</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Dropoff Date') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="departure_flight-addon1"><i class="uil uil-plane-departure"></i></span>
                           <input id="departure_flight" type="text" name="departure_flight" class="form-control" placeholder="Jane">
                           <label for="departure_flight">{{ __('contact.Departure Flight') }}</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <!-- <div class="invalid-feedback"> {{ __('contact.Enter Dropoff Date') }} </div> -->
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="basic-addon1"><i class="uil uil-users-alt"></i></span>
                           <select class="form-select" id="pax" name="pax" required>
                              <option value="" selected>{{ __('contact.Passengers') }}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="+10">+10</option>
                           </select>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Dropoff Date') }} </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-check">
                        <input class="form-check-input" name="roundtrip" type="checkbox" value="1" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked"> Roundtrip </label>
                     </div>
                  </div>
                  <div class="col-12">
                     <hr class="my-4">
                  </div>
                  <div class="col-md-6">
                     <div class="form-floating mb-4">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                        <label for="form_name">{{ __('contact.First Name') }} *</label>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter First Name') }} </div>
                     </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                     <div class="form-floating mb-4">
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                        <label for="form_lastname">{{ __('contact.Last Name') }} *</label>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Phone') }} </div>
                     </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                     <div class="form-floating mb-4">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                        <label for="form_email">Email *</label>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter valid email') }} </div>
                     </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12">
                     <div class="form-floating mb-4">
                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                        <label for="form_message">{{ __('contact.Message') }} *</label>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter message') }}  </div>
                     </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12 text-center">
                     <input type="hidden" id="recaptcha_token" name="recaptcha_token">
                     <div class="g-recaptcha"
                        data-sitekey="{{ $SITE_CONFIGURATION->recapcha_site_key }}"
                        data-callback="onSubmit"
                        data-size="invisible">
                     </div>
                     <input id="btn-submit" type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('contact.Please wait') }}">
                     <p class="text-muted"><strong>*</strong> {{ __('contact.fields required') }}</p>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </form>
         </div>
         <!--/column -->
         <div class="col-lg-5">
            <img src="../assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3">{{ __('about.who') }}</h2>
            <p class="lead fs-lg text-justify">{{ __('about.wasborn') }}</p>
            <p class="mb-6">
               {{ __('about.godandi') }}
            </p>
            <div class="row gy-3 gx-xl-8">
               <div class="col-xl-6">
                  <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                     <li><span><i class="uil uil-check"></i></span><span>{{ __('about.luxc') }}
                        </span>
                     </li>
                     <li class="mt-3"><span><i class="uil uil-check"></i></span><span>{{ __('about.fully') }}</span></li>
                     <li class="mt-3"><span><i class="uil uil-check"></i></span><span>{{ __('about.premium') }}
                        </span>
                     </li>
                  </ul>
               </div>
               <!--/column -->
               <div class="col-xl-6">
                  <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                     <li><span><i class="uil uil-check"></i></span><span>{{ __('about.allr') }}</span></li>
                     <li class="mt-3"><span><i class="uil uil-check"></i></span><span>{{ __('about.bbd') }}
                        </span>
                     </li>
                     <li class="mt-3"><span><i class="uil uil-check"></i></span><span>{{ __('about.perso') }}
                        </span>
                     </li>
                  </ul>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <section class="wrapper bg-soft-primary">
   <div class="container py-2 py-md-6">
      <div class="row mb-10">
         <div class="col-xl-10 mx-auto">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
               <div class="col-md-4">
                  <img src="../assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 class="counter">7518</h3>
                  <p>{{ __('about.book') }}</p>
               </div>
               <!--/column -->
               <div class="col-md-4">
                  <img src="../assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 class="counter">3472</h3>
                  <p>{{ __('about.satisfied') }}</p>
               </div>
               <!--/column -->
               <div class="col-md-4">
                  <img src="../assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 class="counter">2184</h3>
                  <p>{{ __('about.expert') }}</p>
               </div>
               <!--/column -->
               <!-- <div class="col-md-3">
                  <img src="../assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 class="counter">4523</h3>
                  <p>Awards Won</p>
                  </div> -->
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<section class="wrapper bg-light">
	  <div class="container py-6 py-md-6">
	    <div class="row">
	      <div class="col-lg-12 col-xl-10 col-xxl-7 mx-auto text-center">
		  <img src="./assets/img/icons/lineal/stars.svg" class="svg-inject icon-svg icon-svg-sm text-primary text-leaf fs-30 opacity-25" alt="" />
	        <h2 class="display-5 text-center mt-2 mb-10">{!! __('home.welcome') !!}</h2>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	    <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="{{ route(App::getLocale().'.services') }}"><img class="img-fluid" src="./assets/img/photos/fs1.jpg" alt="{{ __('home.fs1alt') }}" srcset="./assets/img/photos/fs1.jpg" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">{{ __('home.view') }}</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">{{ __('home.concierge') }}</h3>
	          </div>
	          <!--/.card-body -->
	        </div>
	        <!-- /.card -->
	      </div>
	      <!--/column -->
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="{{ route(App::getLocale().'.services') }}"><img class="img-fluid" alt="{{ __('home.fs2alt') }}" src="./assets/img/photos/fs2.jpg" srcset="./assets/img/photos/fs2.jpg" alt="" /></a>
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
	            <a href="{{ route(App::getLocale().'.services') }}"><img class="img-fluid" alt="{{ __('home.fs1alt') }}" src="./assets/img/photos/fs3.jpg" srcset="./assets/img/photos/fs3.jpg" alt="" /></a>
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
<!-- /section -->
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
<!-- /section -->
<section class="wrapper bg-soft-primary">
   <div class="container pt-6 pb-14 pb-md-0">
      <div class="row gx-lg-8 gx-xl-0 align-items-center">
         <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
            <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block" data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
            <figure><img src="../assets/img/photos/co1.png" srcset="../assets/img/photos/co1.png" alt=""></figure>
         </div>
         <!--/column -->
         <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
            <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
               <div class="swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <blockquote class="icon fs-lg">
                           <p> {{ __('about.withgo') }} </p>
                           <div class="blockquote-details">
                              <div class="info ps-0">
                                 <!-- <h5 class="mb-1">Coriss Ambady</h5>
                                    <p class="mb-0">Financial Analyst</p> -->
                              </div>
                           </div>
                        </blockquote>
                     </div>
                     <!--/.swiper-slide -->
                     <div class="swiper-slide">
                        <blockquote class="icon fs-lg">
                           <p>{{ __('about.weare') }}</p>
                           <div class="blockquote-details">
                              <!-- <div class="info ps-0">
                                 <h5 class="mb-1">Cory Zamora</h5>
                                 <p class="mb-0">Marketing Specialist</p>
                                 </div> -->
                           </div>
                        </blockquote>
                     </div>
                     <!--/.swiper-slide -->
                     <div class="swiper-slide">
                        <blockquote class="icon fs-lg">
                           <p>{{ __('about.aselec') }}</p>
                           <div class="blockquote-details">
                              <div class="info ps-0">
                                 <!-- <h5 class="mb-1">Nikolas Brooten</h5>
                                    <p class="mb-0">Sales Manager</p> -->
                              </div>
                           </div>
                        </blockquote>
                     </div>
                     <!--/.swiper-slide -->
                  </div>
                  <!--/.swiper-wrapper -->
               </div>
               <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
   <div class="container pt-6 pb-14 pt-md-8 pb-md-16">
      <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
            <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
            <figure class="rounded"><img src="../assets/img/photos/about4.jpg" srcset="../assets/img/photos/about4.jpg" alt=""></figure>
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <img src="../assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-8">{{ __('about.convinced') }}</h2>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">{{ __('about.address') }}</h5>
                  <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London, United Kingdom</address>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">{{ __('about.phone') }}</h5>
                  <p>+52 (55) 5654 0089</p>
                  <p>+52 (55) 5740 1466</p>
                  <p>+52 (55) 4754 5981</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">NATIONAL CALL CENTER</h5>
                  <p>01-800-832-6889</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">USA / CANADA TOLL FREE:</h5>
                  <p>1-800-704-2942</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">E-mail</h5>
                  <p class="mb-0"><a href="mailto:info@godandiandsons.com" class="link-body">info@godandiandsons.com</a></p>
                  <p class="mb-0"><a href="mailto:reserve@godandiandsons.com" class="link-body"> reserve@godandiandsons.com</a></p>
                  <p class="mb-0"><a href="mailto:info@godandi.globalm" class="link-body">info@godandi.global</a></p>
               </div>
            </div>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.10/dist/js/tempus-dominus.min.js" crossorigin="anonymous"></script>
<script>
   function onSubmit(token) {
     const form = document.getElementById('form')
     var data = new FormData(form);
     var entries = data.entries()
     var rqData = {}
     var alertClass = 'alert-danger';
     Loader.open()
     for (const pair of entries) {
       rqData[pair[0]] = pair[1]
     }
     fetch(form.getAttribute('action'), {
       method: "post",
       body: JSON.stringify(rqData),
       headers: {
         'X-CSRF-TOKEN': window.CSRF_TOKEN,
         'Accept': 'application/json',
         'Content-Type': 'application/json'
         // 'Content-Type': 'application/x-www-form-urlencoded',
       },
     }).then((response) => {
       if(response.ok) {
         alertClass = 'alert-success';
       }
       return response.json();
       //return response.text();
     }).then((data) => {
       var alertBox = '<div class="alert ' + alertClass + ' alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' + data.message + '</div>';
       if(alertClass && data.message) {
         form.querySelector(".messages").insertAdjacentHTML('beforeend', alertBox);
         form.reset();
         grecaptcha.reset();
         Loader.close()
       }
     }).catch((err) => {
       console.log(err);
       Loader.close()
     });
     
   }
</script>
<script>
   new tempusDominus.TempusDominus(document.getElementById('pickup_date'), {
     //put your config here
     display:{
       sideBySide: true,
       buttons:{
         close:true,
       },
       icons: {
         close: 'uil uil-times-square'
       },
     }
   });
   new tempusDominus.TempusDominus(document.getElementById('dropoff_date'), {
     //put your config here
     display:{
       sideBySide: true,
       buttons:{
         close:true,
       },
       icons: {
         close: 'uil uil-times-square'
       },
     }
   });
   
   const autoCompleteJS = new autoComplete({
     selector: "#autoComplete",
     //placeHolder: "",
     wrapper: false,
     data: {
       src: [
         'CD Mexico', 'Monterrey', 'Guadalajara', 'Los cabos', 'Cancun', 'Vallarta',
         'República  Dominicana', 'Santo Domingo', 'Punta Cana',
         'Buenos aires',
         'Sao paulo ',
         'Río de Janeiro',
         'Bogota',
         'Medellin',
         'Liberia ',
         'San José en Costa rica',
         'Santiago de chile',
         'San salvador',
         'Guatemala',
         'Panamá',
         'Puerto rico',
         'Lima',
         'Cusco',
         'Miami',
         'Orlando ',
         'New York',
         'Los Ángeles',
         'San Francisco',
         'Atlanta',
         'Hawai',
         'Las vegas',
         'Dallas',
         'Monte video',
         'Punta del Este en Uruguay'
       ],
       cache: true,
     },
     resultsList: {
       element: (list, data) => {
         if (!data.results.length) {
           // Create "No Results" message element
           const message = document.createElement("div");
           // Add class to the created element
           message.setAttribute("class", "no_result");
           // Add message text content
           message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
           // Append message element to the results list
           list.prepend(message);
         }
       },
       noResults: true,
     },
     resultItem: {
       highlight: true
     },
     events: {
       input: {
         selection: (event) => {
           const selection = event.detail.selection.value;
           autoCompleteJS.input.value = selection;
         }
       }
     }
   });
   
   document.addEventListener("DOMContentLoaded", function(event) { 
     document.getElementById('btn-submit').value = '{{ __('contact.Send message') }}'
   });
</script>
@endsection
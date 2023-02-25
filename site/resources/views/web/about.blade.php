@extends('layout.web')
@section('title', __('about.title'))
@section('keywords', __('about.keywords'))
@section('description', __('about.description'))
@section('navBarStyle', 'dark')
@section('head')
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
         <div class="col-lg-6 position-relative order-lg-2">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
               <div class="item">
                  <figure class="rounded shadow"><img src="../assets/img/photos/about2.jpg" srcset="../assets/img/photos/about2.jpg" alt=""></figure>
               </div>
               <div class="item">
                  <figure class="rounded shadow"><img src="../assets/img/photos/about3.jpg" srcset="@@webRoot/assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
               </div>
            </div>
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <img src="../assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3">{{ __('about.who') }}</h2>
            <p class="lead fs-lg">{{ __('about.wasborn') }}</p>
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
<section class="wrapper bg-soft-primary">
   <div class="container py-6 py-md-16">
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
@endsection
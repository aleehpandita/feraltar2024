@extends('layout.web')
@section('title', __('fleet.title'))
@section('head')
@parent
@endsection
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/fleet-2.jpg') }}">
   <!-- data-image-src="./assets/img/photos/bg6.jpg" -->
   <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
      <div class="row">
         <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
               <!-- <div class="post-category text-line text-white">
                  <a href="#" class="text-reset" rel="category">Identity</a>
                  </div> -->
               <!-- /.post-category -->
               <h1 class="display-1 mb-3 text-white">{{__('fleet.h1')}}</h1>
               <p class="lead">{{__('fleet.fleet')}}</p>
            </div>
            <!-- /.post-header -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
<section id="snippet-1" class="wrapper bg-light wrapper-border grid py-4 py-md-4">
   <div class="container pt-0 pt-md-0 pb-13 pb-md-15 isotope">
   <div class="row isotope-filter filter">
      <div class="col-12">
         <p>{{__('fleet.f1')}}:</p>
         <ul>
            <li><a class="filter-item active" data-filter="*">{{__('fleet.all')}}</a></li>
            <li><a class="filter-item" data-filter=".suv">SUV</a></li>
            <li><a class="filter-item" data-filter=".sedan">Sedan</a></li>
            <li><a class="filter-item" data-filter=".minicoach">Minicoach</a>
            <li><a class="filter-item" data-filter=".coach">Coach</a>
         </ul>
      </div>
   </div>
   <div class="row position-relative">
   <div class="row gx-lg-8 item gx-xl-12 gy-10 mt-0 mb-14 mb-md-14 align-items-center suv">
      <div class="col-lg-6 position-relative">
         <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
         <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
         <figure class="rounded mb-0"><img src="./assets/img/photos/suv2.png" srcset="./assets/img/photos/suv2.png" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
         <h3 class="display-4 mb-4">Suburban</h3>
         <p class="mb-5">{{__('fleet.f2')}}</p>
         <div class="row gy-3">
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-bag"></i></span><span>3 {{__('fleet.case')}}</span></li>
                  <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 5 {{__('fleet.pax')}}.</span></li>
               </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.lux')}}.</span></li>
                  <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
               </ul>
            </div>
            <!--/column -->
         </div>
         <!--/.row -->
         <!-- <a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a> -->
      </div>
      <div class="col-lg-6 ">
         <h3 class="display-4 mb-4">Viano</h3>
         <p class="mb-5">{{__('fleet.v1')}}</p>
         <div class="row gy-3">
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-bag"></i></span><span>4 {{__('fleet.case')}}</span></li>
                  <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 6 {{__('fleet.pax')}}.</span></li>
               </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.lux')}}.</span></li>
                  <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
               </ul>
            </div>
         </div>
         <!--/.row -->
      </div>
      <div class="col-lg-6">
         <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
         <figure class="rounded mb-0"><img src="./assets/img/photos/fleet-suv-viano.png" srcset="./assets/img/photos/fleet-suv-viano.png" alt=""></figure>
      </div>
      <div class="col-lg-6 position-relative">
         <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
         <figure class="rounded mb-0"><img src="./assets/img/photos/fleet-suv-escalade-compressor-1-removebg-preview.png" srcset="./assets/img/photos/fleet-suv-escalade-compressor-1-removebg-preview.png" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
         <h3 class="display-4 mb-4">Escalade</h3>
         <p class="mb-5">{{__('fleet.es1')}}</p>
         <div class="row gy-3">
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-bag"></i></span><span>6 {{__('fleet.case')}}</span></li>
                  <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 6 {{__('fleet.pax')}}.</span></li>
               </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.lux')}}.</span></li>
                  <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
               </ul>
            </div>
         </div>
         <!--/.row -->
         <!-- <a href="#" class="btn btn-soft-aqua rounded-pill mt-6 mb-0">More Details</a> -->
      </div>
      <!--/column -->
   </div>
   <!--/.row -->
   <div class="row gx-lg-8 item gx-xl-12 gy-5 align-items-center sedan">
   <div class="col-lg-6 order-lg-2 position-relative">
      <figure class="rounded mb-0"><img alt="mercedes s alado" src="./assets/img/photos/mercedes-e.png" srcset="./assets/img/photos/mercedes-e.png" alt=""></figure>
   </div>
   <!--/column -->
   <div class="col-lg-6">
      <h3 class="display-4 mb-4">Mercedes S Class</h3>
      <p class="mb-5">{{__('fleet.m1')}}</p>
      <div class="row gy-3">
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-bag"></i></span><span>3 {{__('fleet.case')}}</span></li>
               <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 3 {{__('fleet.pax')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.ll1')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <!-- <a href="#" class="btn btn-soft-aqua rounded-pill mt-6 mb-0">More Details</a> -->
   </div>
   <!--/column -->
   <div class="col-lg-6 position-relative">
      <figure class="rounded mb-0"> <img src="./assets/img/photos/mercedes-s.png" srcset="./assets/img/photos/mercedes-s.png" alt=""></figure>
   </div>
   <div class="col-lg-6 order-lg-2">
      <h3 class="display-4 mb-4">Mercedes E Class</h3>
      <p class="mb-5">{{__('fleet.m2')}}</p>
      <div class="row gy-3">
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-bag"></i></span><span>3 {{__('fleet.case')}}</span></li>
               <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 3 {{__('fleet.pax')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.ll1')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-lg-6 order-lg-2">
      <h3 class="display-4 mb-4">Mercedes C Class</h3>
      <p class="mb-5">{{__('fleet.m3')}}</p>
      <div class="row gy-3">
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-bag"></i></span><span>3 {{__('fleet.case')}}</span></li>
               <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 3 {{__('fleet.pax')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.ll1')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-lg-6 order-lg-2">
      <figure class="rounded mb-0"><img src="./assets/img/photos/mercedes-c.png" srcset="./assets/img/photos/mercedes-c.png" alt=""></figure>
   </div>
   <!--/.row -->
   <div class="col-lg-6 order-lg-2">
      <figure class="rounded mb-0"><img src="./assets/img/photos/bmw.png" srcset="./assets/img/photos/bmw.png" alt=""></figure>
   </div>
   <div class="col-lg-6 order-lg-2">
      <h3 class="display-4 mb-4">7 Series BMW</h3>
      <p class="mb-5">{{__('fleet.bmw')}}</p>
      <div class="row gy-3">
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-bag"></i></span><span>3 {{__('fleet.case')}}</span></li>
               <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 3 {{__('fleet.pax')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.ll1')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-lg-6 order-lg-2">
      <h3 class="display-4 mb-4">Jaguar XJ</h3>
      <p class="mb-5">{{__('fleet.jaguar')}}</p>
      <div class="row gy-3">
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-bag"></i></span><span>3 {{__('fleet.case')}}</span></li>
               <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 3 {{__('fleet.pax')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.ll1')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-lg-6 order-lg-2">
      <figure class="rounded mb-0"><img src="./assets/img/photos/jaguar.png" srcset="./assets/img/photos/jaguar.png" alt=""></figure>
   </div>
   <div class="col-lg-6 order-lg-2">
      <figure class="rounded mb-0"><img src="./assets/img/photos/acura.png" srcset="./assets/img/photos/acura.png" alt=""></figure>
   </div>
   <div class="col-lg-6 order-lg-2">
      <h3 class="display-4 mb-4">Acura TL</h3>
      <p class="mb-5">{{__('fleet.acura')}}</p>
      <div class="row gy-3">
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-bag"></i></span><span>3 {{__('fleet.case')}}</span></li>
               <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 3 {{__('fleet.pax')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.ll1')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
      </div>
   </div>
      <!-- /.container -->
   </div>
   <div class="row gx-lg-8 item gx-xl-12 gy-5 align-items-center minicoach">
        <div class="col-lg-6 order-lg-2">
        <h3 class="display-4 mb-4">Sprinter</h3>
      <p class="mb-5">{{__('fleet.sprinter')}}</p>
      <div class="row gy-3">
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-bag"></i></span><span>10 {{__('fleet.case')}}</span></li>
               <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 16 {{__('fleet.pax')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.ll1')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
      </div>
        </div>
        <div class="col-lg-6 order-lg-2">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
          <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="./assets/img/photos/sprinter.png" srcset="./assets/img/photos/sprinter.png" alt=""></figure>
        </div>
   </div>

   <div class="row gx-lg-8 item gx-xl-12 gy-5 align-items-center coach">
   <div class="col-lg-6 order-lg-2">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
          <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="./assets/img/photos/scania.png" srcset="./assets/img/photos/scania.png" alt=""></figure>
        </div>
        <div class="col-lg-6 order-lg-2">
        <h3 class="display-4 mb-4">Scania Irizar PB</h3>
      <p class="mb-5">{{__('fleet.scania')}}</p>
      <div class="row gy-3">
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-bag"></i></span><span>47 {{__('fleet.case')}}</span></li>
               <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 47 {{__('fleet.pax')}}.</span></li>
            </ul>
         </div>
         <!--/column -->
         <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.ll1')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
      </div>
        </div>
   </div>
   </div>   
</div>
@endsection
@section('scripts')
@endsection
@extends('layout.web')
@section('title', __('fleet.title'))
@section('head')
@parent
@endsection
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/suburban.webp') }}">
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
            <li><a class="filter-item" data-filter=".van">Van</a></li>
            <li><a class="filter-item" data-filter=".transporter">Transporter</a>
            <li><a class="filter-item" data-filter=".sedan">Sedan</a>
            <li><a class="filter-item" data-filter=".crafter">Crafter</a>
            <li><a class="filter-item" data-filter=".limo">Limo</a>
         </ul>
      </div>
   </div>
   <div class="row position-relative">
   <div class="row gx-lg-8 item gx-xl-12 gy-10 mt-0 mb-14 mb-md-14 align-items-center suv">
      <div class="col-lg-6 position-relative">
         <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
         <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
         <figure class="rounded mb-0"><img src="{{ asset('assets/img/photos/suv2.png') }}" srcset="{{ asset('assets/img/photos/suv2.png') }}" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
         <h3 class="display-4 mb-4">Suburban</h3>
         <p class="mb-5">{{__('fleet.f2')}}</p>
         <div class="row gy-3">
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-bag"></i></span><span>5 {{__('fleet.case')}}</span></li>
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
      <!-- Fin del div del vehículo Suburban -->
   </div>
   <!--/.row -->
   <div class="row gx-lg-8 item gx-xl-12 gy-5 align-items-center sedan">
   <!--/column -->
   <div class="col-lg-6">
      <h3 class="display-4 mb-4">Sedan</h3>
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
   <!-- Fin del div del vehículo Sedan -->
   <div class="col-lg-6 position-relative">
   <figure class="rounded mb-0"><img alt="Taxi Sedan" src="{{ asset('assets/img/photos/taxi.webp') }}" srcset="{{ asset('assets/img/photos/taxi.webp') }}" alt=""></figure> 
      <!-- <figure class="rounded mb-0"> <img src="{{ asset('assets/img/photos/crafter.webp') }}" srcset="{{ asset('assets/img/photos/crafter.webp') }}" alt=""></figure> -->
   </div>
   <!-- Fin del div de la imagen del Sedan -->
      <!-- /.container -->

   </div>
   <div class="row gx-lg-8 item gx-xl-12 gy-10 mt-0 mb-14 mb-md-14 align-items-center van">
      <div class="col-lg-6 position-relative">
         <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
         <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
         <figure class="rounded mb-0"><img src="{{ asset('assets/img/photos/van.webp') }}" srcset="{{ asset('assets/img/photos/van.webp') }}" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
         <h3 class="display-4 mb-4">Van</h3>
         <p class="mb-5">{{__('fleet.f2')}}</p>
         <div class="row gy-3">
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-bag"></i></span><span>5 {{__('fleet.case')}}</span></li>
                  <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 5 {{__('fleet.pax')}}.</span></li>
               </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
               <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.standard')}}.</span></li>
                  <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
               </ul>
            </div>
            <!--/column -->
         </div>
         <!--/.row -->
         <!-- <a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a> -->
      </div>
      <!-- Fin del div del vehículo Suburban -->
   </div>
   <div class="row gx-lg-8 item gx-xl-12 gy-5 align-items-center transporter">
        <div class="col-lg-6 order-lg-2">
        <h3 class="display-4 mb-4">Transporter</h3>
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
               <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.standard')}}.</span></li>
               <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
            </ul>
         </div>
      </div>
        </div>
        <div class="col-lg-6 order-lg-2">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
          <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="{{ asset('assets/img/photos/transporter.webp') }}" srcset="{{ asset('assets/img/photos/transporter.webp') }}" alt=""></figure>
        </div>
   </div>
   <!-- Fin del div del vehículo Transporter -->
      <div class="row gx-lg-8 item gx-xl-12 gy-10 mt-0 mb-14 mb-md-14 align-items-center crafter">
         <div class="col-lg-6 position-relative">
            <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
            <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/photos/crafter.webp') }}" srcset="{{ asset('assets/img/photos/crafter.webp') }}" alt=""></figure>
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <h3 class="display-4 mb-4">Crafter</h3>
            <p class="mb-5">{{__('fleet.f2')}}</p>
            <div class="row gy-3">
               <div class="col-xl-6">
                  <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                     <li><span><i class="uil uil-bag"></i></span><span>5 {{__('fleet.case')}}</span></li>
                     <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>{{__('fleet.up')}} 5 {{__('fleet.pax')}}.</span></li>
                  </ul>
               </div>
               <!--/column -->
               <div class="col-xl-6">
                  <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                     <li><span><i class="uil uil-car"></i></span><span>{{__('fleet.standard')}}.</span></li>
                     <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>{{__('fleet.safe')}}.</span></li>
                  </ul>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
            <!-- <a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a> -->
         </div>
         <!-- Fin del div del vehículo crafter -->
      </div>

      <div class="row gx-lg-8 item gx-xl-12 gy-5 align-items-center limo">
   <!--/column -->
   <div class="col-lg-6">
      <h3 class="display-4 mb-4">Limo</h3>
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
   <!-- Fin del div del vehículo Sedan -->
   <div class="col-lg-6 position-relative">
   <figure class="rounded mb-0"><img alt="Taxi Sedan" src="{{ asset('assets/img/photos/limo.webp') }}" srcset="{{ asset('assets/img/photos/limo.webp') }}" alt=""></figure> 
      <!-- <figure class="rounded mb-0"> <img src="{{ asset('assets/img/photos/crafter.webp') }}" srcset="{{ asset('assets/img/photos/crafter.webp') }}" alt=""></figure> -->
   </div>
   </div>   
</div>
@endsection
@section('scripts')
@endsection
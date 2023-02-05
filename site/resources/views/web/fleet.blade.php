@extends('layout.web')
@section('title', __('services.title'))
@section('head')
@parent
@endsection
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/fleet.jpg') }}">
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
        </ul>
      </div>
    </div>
    <div class="row position-relative">
      <div class="row gx-lg-8 item gx-xl-12 gy-10 mt-0 mb-14 mb-md-14 align-items-center suv">
        <div class="col-lg-6 position-relative">
          <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
          <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="{{ asset('img/suburban-suv.webp') }}" srcset="{{ asset('img/suburban-suv.webp') }}" alt=""></figure>
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

          <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
          <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="{{ asset('img/suburban-suv.webp') }}" srcset="{{ asset('img/suburban-suv.webp') }}" alt=""></figure>
        </div>


        <div class="col-lg-6 position-relative">
          <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
          <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="{{ asset('img/mercedes.webp') }}" srcset="{{ asset('img/mercedes.webp') }}" alt=""></figure>
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
          <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
          <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="{{ asset('img/mercedes.webp') }}" srcset="{{ asset('img/mercedes.webp') }}" alt=""></figure>
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
          <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
          <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="{{ asset('img/mercedes.webp') }}" srcset="{{ asset('img/mercedes.webp') }}" alt=""></figure>
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
        <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
          <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="{{ asset('img/mercedes.webp') }}" srcset="{{ asset('img/mercedes.webp') }}" alt=""></figure>
        </div>
        <!--/.row -->
      </div>
      
    </div>
    <!-- /.container -->
</section>
@endsection
@section('scripts')
@endsection
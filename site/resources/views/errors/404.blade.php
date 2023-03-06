@extends('layout.web')
@section('title', 'Not found')
@section('navBarStyle', 'ligth')
@section('head')
  @parent
@endsection
@section('content')
  <section class="wrapper bg-light">
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-9 col-xl-8 mx-auto">
          <figure class="mb-10"><img class="img-fluid" src="{{ asset('assets/img/illustrations/404.png') }}" srcset="{{ asset('/assets/img/illustrations/404@2x.png') }} 2x" alt=""></figure>
        </div>
        <!-- /column -->
        <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
          <h1 class="mb-3">{{ __('error404.h1') }}</h1>
          <p class="lead mb-7 px-md-12 px-lg-5 px-xl-7">{{ __('error404.p1') }}</p>
          <a href="{{ route(App::getLocale().'.home') }}" class="btn btn-primary rounded-pill">{{ __('error404.home') }}</a>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection
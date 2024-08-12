<?php

$currentRoute = Route::currentRouteName();
$params = Route::getCurrentRoute()->parameters();
$flag = url('assets/img/flags/us.png');
if (App::getLocale() == 'en') {
  $urlEs = str_replace('en.', 'es.', $currentRoute);
  $urlEn = $currentRoute;
} elseif (App::getLocale() == 'es') {
  $urlEs = $currentRoute;
  $urlEn = str_replace('es.', 'en.', $currentRoute);
  $flag = url('assets/img/flags/mx.png');
}
$mxDestinations = \App\Models\Destination::where('country', 'mx')->where('lang', App::getLocale())->get();
$usDestinations = \App\Models\Destination::where('country', 'ri')->where('lang', App::getLocale())->get();
$restDestinations = \App\Models\Destination::where('country', null)->where('lang', App::getLocale())->get();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@yield ('description',' Cancun Transportation, Airport Transfers, Private transportation, VIP Transfers')">
  <meta name="keywords" content="@yield ('keywords',' Cancun Transportation, Airport Transfers, Private transportation, VIP Transfers')">
  <meta name="author" content="alejandra altamirano">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/colors/leaf.css') }}">
  <link rel="preload" href="{{ asset('assets/css/fonts/urbanist.css') }}" as="style" onload="this.rel='stylesheet'">
  <style>
      :root {
        --animate-duration: 1s;
        --animate-delay: 1s;
        --animate-repeat: 1;
      }
      .animate__animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-duration: var(--animate-duration);
        animation-duration: var(--animate-duration);
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
      }
      .animate__animated.animate__faster {
        -webkit-animation-duration: calc(1s / 2);
        animation-duration: calc(1s / 2);
        -webkit-animation-duration: calc(var(--animate-duration) / 2);
        animation-duration: calc(var(--animate-duration) / 2);
      }

      @media print, (prefers-reduced-motion: reduce) {
        .animate__animated {
          -webkit-animation-duration: 1ms !important;
          animation-duration: 1ms !important;
          -webkit-transition-duration: 1ms !important;
          transition-duration: 1ms !important;
          -webkit-animation-iteration-count: 1 !important;
          animation-iteration-count: 1 !important;
        }
        .animate__animated[class*='Out'] {
          opacity: 0;
        }
      }
        /* Zooming entrances */
      @-webkit-keyframes zoomIn {
        from {
          opacity: 0;
          -webkit-transform: scale3d(0.3, 0.3, 0.3);
          transform: scale3d(0.3, 0.3, 0.3);
        }

        50% {
          opacity: 1;
        }
      }
      @keyframes zoomIn {
        from {
          opacity: 0;
          -webkit-transform: scale3d(0.3, 0.3, 0.3);
          transform: scale3d(0.3, 0.3, 0.3);
        }

        50% {
          opacity: 1;
        }
      }
      .animate__zoomIn {
        -webkit-animation-name: zoomIn;
        animation-name: zoomIn;
      }
      /* Zooming exits */
      @-webkit-keyframes zoomOut {
        from {
          opacity: 1;
        }

        50% {
          opacity: 0;
          -webkit-transform: scale3d(0.3, 0.3, 0.3);
          transform: scale3d(0.3, 0.3, 0.3);
        }

        to {
          opacity: 0;
        }
      }
      @keyframes zoomOut {
        from {
          opacity: 1;
        }

        50% {
          opacity: 0;
          -webkit-transform: scale3d(0.3, 0.3, 0.3);
          transform: scale3d(0.3, 0.3, 0.3);
        }

        to {
          opacity: 0;
        }
      }
      .animate__zoomOut {
        -webkit-animation-name: zoomOut;
        animation-name: zoomOut;
      }
      #loader {
        position: fixed;
        top:0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: rgba(0,0,0,0.3);
        z-index: 10000;
        visibility: hidden;
        display: none;
      }
      .visivility{
        visibility: visible !important;
        display: flex!important;
      }
    </style>
    <script type="text/javascript">
      window.CSRF_TOKEN = '{{ csrf_token() }}';
    </script>
  @yield('head')
  
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-@yield('navBarStyle', 'dark') caret-one">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{route(App::getLocale().'.home')}}">
              <img width="164" class="logo-dark"  src="{{ asset('/assets/img/logo-dark.png') }}" srcset="{{ asset('assets/img/logo-dark.png') }} 2x" alt="" />
              <img width="164" class="logo-light" src="{{ asset('/assets/img/logo-light.png') }}" srcset="{{ asset('assets/img/logo-light.png') }} 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">{{config('app.name')}}</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route(App::getLocale().'.home') }}">{{ __('layout.Home') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route(App::getLocale().'.services') }}">{{ __('layout.Services') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route(App::getLocale().'.fleet') }}">{{ __('layout.Fleet') }}</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="{{ route(App::getLocale().'.contact') }}">{{ __('layout.Reservations') }}</a></li> -->
                <li class="nav-item"><a class="nav-link" href="{{ route(App::getLocale().'.about') }}">{{ __('layout.About') }}</a></li>
                <li class="nav-item d-md-none"><a class="nav-link" href="{{route(App::getLocale().'.contact')}}#drop-us-line" class="btn btn-sm btn-primary rounded-pill">{{ __('home.contactus') }}</a></li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('layout.desti') }}</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content">
                      <div class="row gx-0 gx-lg-3">
                        <div class="col-lg-4">
                          
                        <h6 class="dropdown-header">México</h6>
                          <ul class="list-unstyled cc-2 pb-lg-1">
                            <?php foreach ($mxDestinations as $key => $d): ?>
                              <li><a class="dropdown-item" href="{{ route(App::getLocale().'.destinations') }}/{{$d->slug}}">{{$d->name}}</a></li>
                            <?php endforeach ?>
                            
                            
                          </ul>
                          <h6 class="dropdown-header mt-lg-6">Riviera Maya</h6>
                          <ul class="list-unstyled cc-2">
                            <?php foreach ($usDestinations as $key => $d): ?>
                              <li><a class="dropdown-item" href="{{ route(App::getLocale().'.destinations') }}/{{$d->slug}}">{{$d->name}}</a></li>
                            <?php endforeach ?>
                          </ul>
                        </div>
                        <!--/column -->
                        <!-- <div class="col-lg-8">
                          <h6 class="dropdown-header">{{ __('layout.rest') }}</h6>
                          <ul class="list-unstyled cc-3">
                            <?php foreach ($restDestinations as $key => $d): ?>
                              <li><a class="dropdown-item" href="{{ route(App::getLocale().'.destinations') }}/{{$d->slug}}">{{$d->name}}</a></li>
                            <?php endforeach ?>
                          </ul>
                        </div> -->
                        <!--/column -->
                      </div>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                @if (0==1)
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Demos</a>
                    <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                      <li class="mega-menu-content mega-menu-scroll">
                        <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                          <li class="col"><a class="dropdown-item" href="./demo1.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi1.jpg" srcset="./assets/img/demos/mi1@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo I</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo2.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi2.jpg" srcset="./assets/img/demos/mi2@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo II</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo3.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi3.jpg" srcset="./assets/img/demos/mi3@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo III</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo4.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi4.jpg" srcset="./assets/img/demos/mi4@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo IV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo5.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi5.jpg" srcset="./assets/img/demos/mi5@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo V</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo6.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi6.jpg" srcset="./assets/img/demos/mi6@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo VI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo7.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi7.jpg" srcset="./assets/img/demos/mi7@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo VII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo8.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi8.jpg" srcset="./assets/img/demos/mi8@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo VIII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo9.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi9.jpg" srcset="./assets/img/demos/mi9@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo IX</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo10.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi10.jpg" srcset="./assets/img/demos/mi10@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo X</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo11.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi11.jpg" srcset="./assets/img/demos/mi11@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo12.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi12.jpg" srcset="./assets/img/demos/mi12@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo13.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi13.jpg" srcset="./assets/img/demos/mi13@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XIII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo14.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi14.jpg" srcset="./assets/img/demos/mi14@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XIV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo15.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi15.jpg" srcset="./assets/img/demos/mi15@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo16.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi16.jpg" srcset="./assets/img/demos/mi16@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XVI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo17.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi17.jpg" srcset="./assets/img/demos/mi17@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XVII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo18.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi18.jpg" srcset="./assets/img/demos/mi18@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XVIII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo19.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi19.jpg" srcset="./assets/img/demos/mi19@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XIX</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo20.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi20.jpg" srcset="./assets/img/demos/mi20@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XX</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo21.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi21.jpg" srcset="./assets/img/demos/mi21@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo22.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi22.jpg" srcset="./assets/img/demos/mi22@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo23.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi23.jpg" srcset="./assets/img/demos/mi23@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXIII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo24.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi24.jpg" srcset="./assets/img/demos/mi24@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXIV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo25.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi25.jpg" srcset="./assets/img/demos/mi25@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo26.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi26.jpg" srcset="./assets/img/demos/mi26@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXVI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo27.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi27.jpg" srcset="./assets/img/demos/mi27@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXVII</span>
                            </a></li>
                        </ul>
                        <!--/.row -->
                        <span class="d-none d-lg-flex"><i class="uil uil-direction"></i><strong>Scroll to view more</strong></span>
                      </li>
                      <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./services.html">Services I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./services2.html">Services II</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./about.html">About I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./about2.html">About II</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./shop.html">Shop I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./shop2.html">Shop II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./shop-product.html">Product Page</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./shop-cart.html">Shopping Cart</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./shop-checkout.html">Checkout</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./contact.html">Contact I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./contact2.html">Contact II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./contact3.html">Contact III</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Career</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./career.html">Job Listing I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./career2.html">Job Listing II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./career-job.html">Job Description</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./404.html">404 Not Found</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./page-loader.html">Page Loader</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./signin.html">Sign In I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./signin2.html">Sign In II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./signup.html">Sign Up I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./signup2.html">Sign Up II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./terms.html">Terms</a></li>
                        </ul>
                      </li>
                      <li class="nav-item"><a class="dropdown-item" href="./pricing.html">Pricing</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One Page</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Projects</a>
                    <div class="dropdown-menu dropdown-lg">
                      <div class="dropdown-lg-content">
                        <div>
                          <h6 class="dropdown-header">Project Pages</h6>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="./projects.html">Projects I</a></li>
                            <li><a class="dropdown-item" href="./projects2.html">Projects II</a></li>
                            <li><a class="dropdown-item" href="./projects3.html">Projects III</a></li>
                            <li><a class="dropdown-item" href="./projects4.html">Projects IV</a></li>
                          </ul>
                        </div>
                        <!-- /.column -->
                        <div>
                          <h6 class="dropdown-header">Single Projects</h6>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="./single-project.html">Single Project I</a></li>
                            <li><a class="dropdown-item" href="./single-project2.html">Single Project II</a></li>
                            <li><a class="dropdown-item" href="./single-project3.html">Single Project III</a></li>
                            <li><a class="dropdown-item" href="./single-project4.html">Single Project IV</a></li>
                          </ul>
                        </div>
                        <!-- /.column -->
                      </div>
                      <!-- /auto-column -->
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="./blog.html">Blog without Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Blog with Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Blog with Left Sidebar</a></li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Posts</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post.html">Post without Sidebar</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Post with Sidebar</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Post with Left Sidebar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blocks</a>
                    <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                      <li class="mega-menu-content">
                        <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/about.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block1.svg" alt=""></div>
                              <span>About</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/blog.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block2.svg" alt=""></div>
                              <span>Blog</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/call-to-action.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block3.svg" alt=""></div>
                              <span>Call to Action</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/clients.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block4.svg" alt=""></div>
                              <span>Clients</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/contact.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block5.svg" alt=""></div>
                              <span>Contact</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/facts.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block6.svg" alt=""></div>
                              <span>Facts</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/faq.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block7.svg" alt=""></div>
                              <span>FAQ</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/features.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block8.svg" alt=""></div>
                              <span>Features</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/footer.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block9.svg" alt=""></div>
                              <span>Footer</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/hero.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block10.svg" alt=""></div>
                              <span>Hero</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/misc.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block17.svg" alt=""></div>
                              <span>Misc</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/navbar.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block11.svg" alt=""></div>
                              <span>Navbar</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/portfolio.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block12.svg" alt=""></div>
                              <span>Portfolio</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/pricing.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block13.svg" alt=""></div>
                              <span>Pricing</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/process.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block14.svg" alt=""></div>
                              <span>Process</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/team.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block15.svg" alt=""></div>
                              <span>Team</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/testimonials.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block16.svg" alt=""></div>
                              <span>Testimonials</span>
                            </a>
                          </li>
                        </ul>
                        <!--/.row -->
                      </li>
                      <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                  </li>
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Destinations</a>
                    <ul class="dropdown-menu mega-menu">
                      <li class="mega-menu-content">
                        <div class="row gx-0 gx-lg-3">
                          <div class="col-lg-4">
                            <h6 class="dropdown-header">México</h6>
                            <ul class="list-unstyled cc-2 pb-lg-1">
                              <li><a class="dropdown-item" href="./docs/index.html">Ciudad de México</a></li>
                              <li><a class="dropdown-item" href="./docs/forms.html">Forms</a></li>
                              <li><a class="dropdown-item" href="./docs/faq.html">FAQ</a></li>
                              <li><a class="dropdown-item" href="./docs/changelog.html">Changelog</a></li>
                              <li><a class="dropdown-item" href="./docs/credits.html">Credits</a></li>
                            </ul>
                            <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                            <ul class="list-unstyled cc-2">
                              <li><a class="dropdown-item" href="./docs/styleguide/colors.html">Colors</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/fonts.html">Fonts</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/icons-svg.html">SVG Icons</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/icons-font.html">Font Icons</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/illustrations.html">Illustrations</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/backgrounds.html">Backgrounds</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/misc.html">Misc</a></li>
                            </ul>
                          </div>
                          <!--/column -->
                          <div class="col-lg-8">
                            <h6 class="dropdown-header">Elements</h6>
                            <ul class="list-unstyled cc-3">
                              <li><a class="dropdown-item" href="./docs/elements/accordion.html">Accordion</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/alerts.html">Alerts</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/animations.html">Animations</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/avatars.html">Avatars</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/background.html">Background</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/badges.html">Badges</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/buttons.html">Buttons</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/card.html">Card</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/carousel.html">Carousel</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/dividers.html">Dividers</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/form-elements.html">Form Elements</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/image-hover.html">Image Hover</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/image-mask.html">Image Mask</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/lightbox.html">Lightbox</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/player.html">Media Player</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/modal.html">Modal</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/pagination.html">Pagination</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/progressbar.html">Progressbar</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/shadows.html">Shadows</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/shapes.html">Shapes</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/tables.html">Tables</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/tabs.html">Tabs</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/text-animations.html">Text Animations</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/text-highlight.html">Text Highlight</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/tiles.html">Tiles</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/tooltips-popovers.html">Tooltips & Popovers</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/typography.html">Typography</a></li>
                            </ul>
                          </div>
                          <!--/column -->
                        </div>
                        <!--/.row -->
                      </li>
                      <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                  </li>
                @endif
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:{{ $SITE_CONFIGURATION->main_email }}" class="link-inverse">{{ $SITE_CONFIGURATION->main_email }}</a>
                  <br /> USA / Canada <br />
                  <a href="tel:{{$SITE_CONFIGURATION->usa_canada_toll_free}}">{{$SITE_CONFIGURATION->usa_canada_toll_free}}</a> <br />
                  Mexico <br />
                  <a href="tel:{{$SITE_CONFIGURATION->national_call_center}}">{{$SITE_CONFIGURATION->national_call_center}}</a> <br />
                  <nav class="nav social social-white mt-4">
                    @if (!empty($SITE_CONFIGURATION->twitter))
                      <a href="{{$SITE_CONFIGURATION->twitter}}"><i class="uil uil-twitter"></i></a>
                    @endif
                    @if (!empty($SITE_CONFIGURATION->facebook))
                      <a href="{{$SITE_CONFIGURATION->facebook}}"><i class="uil uil-facebook-f"></i></a>
                    @endif
                    @if (!empty($SITE_CONFIGURATION->instagram))
                      <a href="{{$SITE_CONFIGURATION->instagram}}"><i class="uil uil-instagram"></i></a>
                    @endif
                    @if (!empty($SITE_CONFIGURATION->youtube))
                      <a href="{{$SITE_CONFIGURATION->youtube}}"><i class="uil uil-youtube"></i></a>
                    @endif
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item dropdown language-select">
                <a class="nav-link dropdown-item dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="uil uil-phone-volume"></i> <span class="d-none d-md-inline ms-1">{{ __('layout.call-us') }}</span></a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <span class="dropdown-item">USA / Canada</span>
                    <a class="dropdown-item" href="tel:{{$SITE_CONFIGURATION->usa_canada_toll_free}}">{{$SITE_CONFIGURATION->usa_canada_toll_free}} </a>
                  </li>
                  <li class="nav-item"><hr class="my-0"></li>
                  <li class="nav-item">
                    <span class="dropdown-item">Mexico</span>
                    <a class="dropdown-item" href="tel:{{$SITE_CONFIGURATION->usa_canada_toll_free}}">{{$SITE_CONFIGURATION->national_call_center}} </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i>
              </a></li>
              <li class="nav-item dropdown language-select">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{$flag}}" width="18" height="11" alt=""> </a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="{{route($urlEn, $params)}}"><img src="{{asset('assets/img/flags/us.png')}}" width="18" height="11" alt=""> </a></li>
                  <li class="nav-item"><a class="dropdown-item" href="{{route($urlEs, $params)}}"><img src="{{asset('assets/img/flags/mx.png')}}" width="18" height="11" alt=""> </a></li>
                </ul>
              </li>
            
              <!-- <li class="nav-item offcanvas-body d-none  d-md-block "><a class="nav-link " href="{{route(App::getLocale().'.contact')}}"><small class="d-none d-lg-inline">Always at your service: </small><p>☎ 01-800-832-6889</p></a></li> -->
            
              <li class="nav-item d-none d-md-block">
                <a href="{{route(App::getLocale().'.contact')}}#drop-us-line" class="btn btn-sm btn-primary rounded-pill">{{ __('home.contactus') }} !</a>
              </li>
              <!-- <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li> -->
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">{{config('app.name')}}</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> {!! $SITE_CONFIGURATION->address !!}</address>
            <a href="mailto:{{ $SITE_CONFIGURATION->main_email }}">{{ $SITE_CONFIGURATION->main_email }}</a>
            <br /> USA / Canada <br />
            <a href="tel:{{$SITE_CONFIGURATION->usa_canada_toll_free}}">{{$SITE_CONFIGURATION->usa_canada_toll_free}}</a> <br />
            Mexico <br />
            <a href="tel:{{$SITE_CONFIGURATION->national_call_center}}">{{$SITE_CONFIGURATION->national_call_center}}</a> <br />
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
              @if (!empty($SITE_CONFIGURATION->twitter))
                <a href="{{$SITE_CONFIGURATION->twitter}}"><i class="uil uil-twitter"></i></a>
              @endif
              @if (!empty($SITE_CONFIGURATION->facebook))
                <a href="{{$SITE_CONFIGURATION->facebook}}"><i class="uil uil-facebook-f"></i></a>
              @endif
              @if (!empty($SITE_CONFIGURATION->instagram))
                <a href="{{$SITE_CONFIGURATION->instagram}}"><i class="uil uil-instagram"></i></a>
              @endif
              @if (!empty($SITE_CONFIGURATION->youtube))
                <a href="{{$SITE_CONFIGURATION->youtube}}"><i class="uil uil-youtube"></i></a>
              @endif
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    @yield('content')
    <div  class="float-contact">
      <div class="position-relative">
        
        <div id="float-btns" class="float-contact-btns animate__animated ">
          <a id="close-float" href="#" class="bg-transparent m-0 p-0"><i class="uil uil-times-circle text-danger"></i></a>
          <a class="shadow-lg" href="https://api.whatsapp.com/send?phone={{$SITE_CONFIGURATION->whatsapp}}"><i class="uil uil-whatsapp"></i></a>
          <a class="shadow-lg" href="tel:{{$SITE_CONFIGURATION->usa_canada_toll_free}}"><i class="uil uil-phone"></i></a>
          <a class="shadow-lg" href="{{route(App::getLocale().'.contact')}}#drop-us-line"><i class="uil uil-envelope"></i></a>
        </div>
      </div>
      <div id="float-contact-btn" class="float-contact-btn">
        <img src="{{asset('assets/img/icons/lineal/telephone-3.svg')}}" class="svg-inject icon-svg icon-svg-sm text-yellow" alt="" />
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-3">
          <div class="widget">
            <img class="mb-4" width="164" src="{{ asset('assets/img/logo-light.png') }}" srcset="{{ asset('assets/img/logo-light.png') }} 2x" alt="" />
            <p class="mb-4">© {{config('app.year')}} {{config('app.name')}}. All rights reserved.</p>
            <nav class="nav social social-white">
            
              @if (!empty($SITE_CONFIGURATION->facebook))
                <a href="{{$SITE_CONFIGURATION->facebook}}"><i class="uil uil-facebook-f"></i></a>
              @endif
              @if (!empty($SITE_CONFIGURATION->instagram))
                <a href="{{$SITE_CONFIGURATION->instagram}}"><i class="uil uil-instagram"></i></a>
              @endif
              
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <!-- /column -->
        <div class="col-md-12 col-lg-6">
          <div class="row gx-0 gx-lg-3">
            <div class="col-md-6 col-lg-4">
              <h6 class="dropdown-header">México</h6>
              <ul class="list-unstyled cc-1 pb-lg-1">
                <?php foreach ($mxDestinations as $key => $d): ?>
                  <li><a class="dropdown-item" href="{{ route(App::getLocale().'.destinations') }}/{{$d->slug}}">{{$d->name}}</a></li>
                <?php endforeach ?>
              </ul>
              <h6 class="dropdown-header mt-lg-6">Rivera Maya</h6>
              <ul class="list-unstyled cc-1">
                <?php foreach ($usDestinations as $key => $d): ?>
                  <li><a class="dropdown-item" href="{{ route(App::getLocale().'.destinations') }}/{{$d->slug}}">{{$d->name}}</a></li>
                <?php endforeach ?>
              </ul>
            </div>
            <!--/column -->
            <!-- <div class="col-md-6 col-lg-8">
              <h6 class="dropdown-header">Rest of the World</h6>
              <ul class="list-unstyled cc-2">
                <?php foreach ($restDestinations as $key => $d): ?>
                  <li><a class="dropdown-item" href="{{ route(App::getLocale().'.destinations') }}/{{$d->slug}}">{{$d->name}}</a></li>
                <?php endforeach ?>
              </ul>
            </div> -->
            <!--/column -->
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">{{ __('layout.get') }}</h4>
            <address> {!! $SITE_CONFIGURATION->address !!}</address>
            <a href="mailto:{{ $SITE_CONFIGURATION->main_email }}">{{ $SITE_CONFIGURATION->main_email }}</a>
            <br /> USA / Canada <br />
            <a href="tel:{{$SITE_CONFIGURATION->usa_canada_toll_free}}">{{$SITE_CONFIGURATION->usa_canada_toll_free}}</a> <br />
            Mexico <br />
            <a href="tel:{{$SITE_CONFIGURATION->national_call_center}}">{{$SITE_CONFIGURATION->national_call_center}}</a> <br />
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <style>
    .float-contact{
      position: fixed;
      right: 4.5rem;
      bottom: 1.5rem;
      z-index: 10000;
      width: 300px;
      display: flex;
      align-items: center;
    }
    .float-contact a {
      padding: 5px;
      border-radius: 30px;
      background-color: #FF8118;
      color: #fff;
      margin-left: 0.25rem;
      margin-right: 0.25rem;
      width: 40px;
      text-align: center;
    }
    .float-contact-btn{
    /*      position: fixed;*/
      right: 4.5rem;
      bottom: 1.5rem;
      width: 2.3rem;
      height: 2.3rem;
      background-color: white;
      border-radius: 1.15rem;
      padding: 2px;
      border: 2px solid #FF8118;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-left: auto;
    }
    .content-wrapper .float-contact-btn > svg{
      width: 1.5rem;
      height: 1.5rem;
    }
    .content-wrapper .float-contact-btns  svg{
      width: .85rem;
      height: .85rem;
    }
    .float-contact-btns{
      visibility: hidden;
      display: none;
      align-items: center;
    }
  </style>
  
  <script src="{{ asset('assets/js/plugins.js') }}" defer></script>
  <script src="{{ asset('assets/js/theme.js?v=1') }}" defer></script>
  <div id="loader" class="animate__animated animate__faster">
    <div class="spinner-grow m-auto text-color1" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  <script>
    var Loader = (function() {
      var loaderElement = document.getElementById('loader')
      var eventFunction = function (e) {
        loaderElement.classList.remove('visivility')
      }
      return {
        open: function () {
          loaderElement.classList.remove('animate__zoomOut')
          loaderElement.classList.add('visivility', 'animate__zoomIn')
        },
        close: function() {
          loaderElement.addEventListener('animationend', eventFunction, {once : true});
          loaderElement.classList.add('animate__zoomOut')
        }
      }
    }())
    var FloatContactBtn = (function () {
      var loaderElement = document.getElementById('float-btns')
      var eventFunction = function (e) {
        loaderElement.classList.remove('visivility')
      }
      return {
        open: function() {
          loaderElement.classList.remove('animate__fadeOutRight')
          loaderElement.classList.add('visivility', 'animate__fadeInRightBig')
        },
        close: function() {
          loaderElement.addEventListener('animationend', eventFunction, {once : true});
          loaderElement.classList.add('animate__fadeOutRight')
        },
      }
    }())
    var floatBtn = document.getElementById('float-contact-btn')
    floatBtn.addEventListener('click', function (e) {
      FloatContactBtn.open();
    })
    var cls = document.getElementById('close-float')
    cls.addEventListener('click', function (e) {
      FloatContactBtn.close();
    })
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Corporation",
      "name": "GoDandiAndSons",
      "alternateName": "Luxury Transportation | Transportación de Lujo",
      "url": "https://www.godandiandsons.com",
      "logo": "https://www.godandiandsons.com/assets/img/logo-light.png",
      "sameAs": "https://www.facebook.com/GodandiWorldwide/"
    }
</script>
  @yield('scripts')
</body>

</html>
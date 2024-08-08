@extends('layout.web')
@section('title', __('home.home'))
@section('keywords', __('home.keywords'))
@section('description', __('home.description'))
@section('navBarStyle', 'dark')
@section('head')
@endsection
@section('content')
@php
$words = [
__('home.protegiendo'),
__('home.transportando'),
__('home.atendiendo'),
__('home.recibiendo'),
__('home.trasladando'),
__('home.moviendo'),
__('home.cuidando')
]
@endphp
<section class="wrapper bg-dark">
	<div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
		<div class="swiper">
			<div class="swiper-wrapper" style="cursor: grab; transform: translate3d(-4320px, 0px, 0px); transition-duration: 500ms;" id="swiper-wrapper-5ee3a3a79ef941d4" aria-live="off">
				<div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/slide.webp" style="background-image: url(&quot;./assets/img/photos/slide.webp&quot;); width: 1440px;" role="group" aria-label="1 / 4">
					<div class="container h-100">
						<div class="row h-100">
							<div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
								<h1 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">{!! __('home.best') !!}</h1>
								<h2 class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">{!! __('home.home-h2') !!}</h2>
								<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-primary rounded-pill">{!! __('home.book') !!}</a></div>
							</div>
							<!--/column -->
						</div>
						<!--/.row -->
					</div>
					<!--/.container -->
				</div>
				<!--/.swiper-slide -->
				<div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/slide2.webp" style="background-image: url(&quot;./assets/img/photos/slide2.webp&quot;); width: 1440px;" role="group" aria-label="1 / 4">
					<div class="container h-100">
						<div class="row h-100">
							<div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
								<!-- <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div> -->
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
<!-- /section -->
<section class="wrapper bg-light">
	<div class="container py-6 py-md-6">
		<div class="row">
			<div class="col-lg-12 col-xl-10 col-xxl-7 mx-auto text-center">
				<img src="./assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm text-primary text-leaf fs-30 opacity-25" alt="" />
				<h2 class="display-5 text-center mt-2 mb-10">{!! __('home.welcome') !!}</h2>
			</div>
			<!--/column -->
		</div>
		<!--/.row -->
		<div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
			<div class="col-sm-8 col-md-6 col-lg-3 mx-auto">
				<div class="card shadow-lg">
					<figure class="card-img-top overlay overlay-1">
						<a href="{{ route(App::getLocale().'.services') }}"><img class="img-fluid" src="./assets/img/photos/fs1.webp" alt="{{ __('home.fs1alt') }}" srcset="./assets/img/photos/fs1.webp" alt="" /></a>
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
			<div class="col-sm-8 col-md-6 col-lg-3 mx-auto">
				<div class="card shadow-lg">
					<figure class="card-img-top overlay overlay-1">
						<a href="{{ route(App::getLocale().'.services') }}"><img class="img-fluid" alt="{{ __('home.fs2alt') }}" src="./assets/img/photos/fs2.webp" srcset="./assets/img/photos/fs2.webp" alt="" /></a>
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
			<div class="col-sm-8 col-md-6 col-lg-3 mx-auto">
				<div class="card shadow-lg">
					<figure class="card-img-top overlay overlay-1">
						<a href="{{ route(App::getLocale().'.services') }}"><img class="img-fluid" alt="{{ __('home.fs1alt') }}" src="./assets/img/photos/fs3.webp" srcset="./assets/img/photos/fs3.webp" alt="" /></a>
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
			<div class="col-sm-8 col-md-6 col-lg-3 mx-auto">
				<div class="card shadow-lg">
					<figure class="card-img-top overlay overlay-1">
						<a href="{{ route(App::getLocale().'.services') }}"><img class="img-fluid" alt="{{ __('home.fs1alt') }}" src="./assets/img/photos/fs4.webp" srcset="./assets/img/photos/fs4.webp" alt="" /></a>
						<figcaption>
							<h5 class="from-top mb-0">{{ __('home.view') }}</h5>
						</figcaption>
					</figure>
					<div class="card-body p-6">
						<h3 class="fs-21 mb-0">{{ __('home.limo') }}</h3>
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
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/driver-cancun-airport.webp">
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
				<h2 class="display-5 text-center mt-2 mb-10">{!! __('home.wehave') !!}</h2>
			</div>
			<!--/column -->
		</div>
		<!--/.row -->
		<div class="row text-center">
			<div class="col-xl-9 mx-auto">
				<div class="player" data-plyr-provider="vimeo" data-plyr-embed-id="{{ __('home.video') }}"></div>
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
						<br class="d-none d-md-block"> {{ __('home.explore') }}
					</h2>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-hyatt-ziva.webp" srcset="./assets/img/photos/tranfers-to-hyatt-ziva.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Hyatt Ziva Cancún</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-barcelo-maya-palace.webp" srcset="./assets/img/photos/tranfers-to-barcelo-maya-palace.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Barcelo Maya Palace</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-dreams-riviera-cancun.webp" srcset="./assets/img/photos/tranfers-to-dreams-riviera-cancun.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Dreams Riviera Cancún</h3>
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
									<a href="/contact"><img class="img-fluid" src="./assets/img/photos/tranfers-to-ferry-ultramar.webp" srcset="./assets/img/photos/tranfers-to-ferry-ultramar.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Ferry Ultramar Pto Juarez</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-fiesta-americana-condesa.webp" srcset="./assets/img/photos/tranfers-to-fiesta-americana-condesa.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Fiesta Americana Condesa</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-grand-riviera-princess.webp" srcset="./assets/img/photos/tranfers-to-grand-riviera-princess.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Grand Riviera Princess</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-hyatt-playa-del-carmen.webp" srcset="./assets/img/photos/tranfers-to-hyatt-playa-del-carmen.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Hyatt Playa del Carmen</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-ocean-riviera-paradise.webp" srcset="./assets/img/photos/tranfers-to-ocean-riviera-paradise.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Ocean Riviera Paradise</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-paradisus-la-esmeralda.webp" srcset="./assets/img/photos/tranfers-to-paradisus-la-esmeralda.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Paradisus la Esmeralda</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-paradisus.webp" srcset="./assets/img/photos/tranfers-to-paradisus.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Hotel Paradisus Cancún</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-playa-mujeres.webp" srcset="./assets/img/photos/tranfers-to-playa-mujeres.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">{{ __('home.hotelsat') }} Playa Mujeres</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-playacar.webp" srcset="./assets/img/photos/tranfers-to-playacar.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">{{ __('home.hotelsat') }} Playacar Beach</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-ritz-carlton.webp" srcset="./assets/img/photos/tranfers-to-ritz-carlton.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Ritz Carlton Cancún</h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-secrets-silversands.webp" srcset="./assets/img/photos/tranfers-to-secrets-silversands.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">Secrets Silversands </h3>
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
									<a href="#"><img class="img-fluid" src="./assets/img/photos/tranfers-to-the-royal.webp" srcset="./assets/img/photos/tranfers-to-the-royal.webp" alt="" /></a>
									<figcaption>
										<h5 class="from-top mb-0">{{ __('home.transferhotel') }}</h5>
									</figcaption>
								</figure>
								<div class="card-body p-6">
									<h3 class="fs-21 mb-1">The Royal All Suites</h3>
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
				<!-- <div class="img-mask mask-1"><img src="./assets/img/photos/about29.jpg" srcset="./assets/img/photos/about29.jpg 2x" alt="" /></div> -->
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
				<h3>{{ __('home.whyy') }}</h3>
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
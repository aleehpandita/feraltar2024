@extends('layout.web')
@section('title', __('destinations.title'))
@section('navBarStyle', 'ligth')
@section('head')
  @parent
@endsection
@section('content')
  <section class="section-frame overflow-hidden">
    <div class="wrapper bg-soft-primary">
      <div class="container py-16 py-md-16 text-center">
        <div class="row">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h1 class="display-1 mb-3">{{ __('destinations.desti') }}</h1>
            <p class="lead mb-1">{{ __('destinations.text2') }}</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
  </section>
  <section class="wrapper bg-light">
  <div class="container py-8 py-md-7">
    <!-- <div class="row">
      <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
        <h2 class="fs-15 text-uppercase text-primary text-center">Our News</h2>
        <h3 class="display-4 mb-6 text-center">Here are the latest company news from our blog that got the most attention.</h3>
      </div>
    </div> -->
    <!-- /.row -->
    <div class="position-relative">
      <div class="row">
        @foreach ($destinations as $d)
          <div class="col-md-4">
          <div class="swiper-slide">
            <div class="item-inner">
              <article>
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="{{ route(App::getLocale().'.destinationSlug', ['slug'=>$d->slug]) }}"> <img src="{{ asset($d->main_image) }}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">{{ __('destinations.read') }}</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <!-- <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Coding</a>
                      </div> -->
                      <!-- /.post-category -->
                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">{{ $d->name }}</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content text-justify">
                      <p>{{ __('destinations.text') }} {{ __('destinations.let') }} <b>{{ $d->name }} </b> {{ __('destinations.unfo') }}.</p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <!-- <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                    </ul>
                  </div> -->
                    <!-- /.post-meta -->
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              <!-- /article -->
            </div>
            <!-- /.item-inner -->
          </div>
          </div>
        @endforeach
      </div>
    </div>
    <!-- /.position-relative -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
@endsection
@section('scripts')
@endsection
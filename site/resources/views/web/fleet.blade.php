@extends('layout.web')
@section('title', __('services.title'))
@section('head')
  @parent
@endsection
@section('content')
  <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/bg6.jpg">
    <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
      <div class="row">
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <div class="post-header">
            <!-- <div class="post-category text-line text-white">
              <a href="#" class="text-reset" rel="category">Identity</a>
            </div> -->
            <!-- /.post-category -->
            <h1 class="display-1 mb-3 text-white">{{__('fleet.h1')}}</h1>
            <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">Integer posuere erat a ante venenatis dapibus posuere. Maecenas faucibus mollis interdum.</p>
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
  <!-- <div class="container py-14 py-md-4">
    <div class="grid grid-view projects-masonry">
      <div class="isotope-filter filter mb-10">
        <p>Filter:</p>
        <ul>
          <li><a class="filter-item active" data-filter="*">All</a></li>
          <li><a class="filter-item" data-filter=".suv">SUV</a></li>
          <li><a class="filter-item" data-filter=".sedan">Sedan</a></li>
          <li><a class="filter-item" data-filter=".workshop">Workshop</a></li>
          <li><a class="filter-item" data-filter=".still-life">Still Life</a></li>
        </ul>
      </div>
    </div>
  </div> -->
  <section id="snippet-1" class="wrapper bg-light wrapper-border grid py-14 py-md-4">
    <div class="container pt-0 pt-md-0 pb-13 pb-md-15 isotope">
      <div class="row isotope-filter filter">
        <div class="col-12">
          
          <p>Filter:</p>
          <ul>
            <li><a class="filter-item active" data-filter="*">All</a></li>
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
            <figure class="rounded mb-0"><img src="../../assets/img/photos/se3.jpg" srcset="../../assets/img/photos/se3@2x.jpg 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Suburban</h3>
            <p class="mb-5">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-bag"></i></span><span>3 medium case</span></li>
                  <li class="mt-3"><span><i class="uil uil-user-check"></i></span><span>Up to 5 passengers.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                  <li><span><i class="uil uil-car"></i></span><span>Luxury SUV.</span></li>
                  <li class="mt-3"><span><i class="uil uil-shield-check"></i></span><span>Safety service.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <!-- <a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a> -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 item gx-xl-12 gy-10 align-items-center sedan">
          <div class="col-lg-6 order-lg-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="../../assets/img/photos/se4.jpg" srcset="../../assets/img/photos/se4@2x.jpg 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Sedan</h3>
            <p class="mb-5">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare sem.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <!-- <a href="#" class="btn btn-soft-aqua rounded-pill mt-6 mb-0">More Details</a> -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
    </div>
    <!-- /.container -->
  </section>
@endsection
@section('scripts')
@endsection
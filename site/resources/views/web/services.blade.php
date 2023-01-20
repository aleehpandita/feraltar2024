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
            <h1 class="display-1 mb-3 text-white">Our services</h1>
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

  <section id="snippet-1" class="wrapper bg-light wrapper-border">
    <!-- <figure class="position-relative mb-10"><img class="img-fluid" src="../../assets/img/docs/angle-lower-start.jpg" alt=""><span class="display-6 text-navy" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">INDIVIDUAL / CONCIERGE</span></figure> -->
    <section class="wrapper bg-soft-primary mb-5">
      <div class="container py-5 py-md-7">
        <h2 class=" text-center mb-0">INDIVIDUAL / CONCIERGE</h2>
      </div>
      <div class="overflow-hidden">
        <div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
            <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
          </svg></div>
      </div>
    </section>
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h3 class=" mb-3">Chaffeuring</h3>
          <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <div class="row gx-xl-10 gy-6">
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Mission</h4>
                  <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                </div>
              </div>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Values</h4>
                  <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <hr class="my-8" />
      <!--/.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10">
        <div class="col-md-8 col-lg-6 col-xl-5 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h3 class=" mb-3">Travel Service</h3>
          <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <div class="row gx-xl-10 gy-6">
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Mission</h4>
                  <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                </div>
              </div>
            </div>
            <!--/column -->
            <div class="col-md-6 order-lg-2">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Values</h4>
                  <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <hr class="my-8" />
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h3 class=" mb-3">Luxury Car Rental</h3>
          <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <div class="row gx-xl-10 gy-6">
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Mission</h4>
                  <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                </div>
              </div>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Values</h4>
                  <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <hr class="my-8" />
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10">
        <div class="col-md-8 col-lg-6 col-xl-5 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h3 class=" mb-3">Yacht Chartering</h3>
          <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <div class="row gx-xl-10 gy-6">
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Mission</h4>
                  <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                </div>
              </div>
            </div>
            <!--/column -->
            <div class="col-md-6 order-lg-2">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Values</h4>
                  <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <hr class="my-8" />
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h3 class=" mb-3">Jet & Helicopter Charter</h3>
          <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <div class="row gx-xl-10 gy-6">
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Mission</h4>
                  <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                </div>
              </div>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Values</h4>
                  <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <hr class="my-8" />
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10">
        <div class="col-md-8 col-lg-6 col-xl-5 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h3 class=" mb-3">Clubs & Restaurants</h3>
          <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <div class="row gx-xl-10 gy-6">
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Mission</h4>
                  <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                </div>
              </div>
            </div>
            <!--/column -->
            <div class="col-md-6 order-lg-2">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Values</h4>
                  <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <hr class="my-8" />
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h3 class=" mb-3">Tickets & Events</h3>
          <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <div class="row gx-xl-10 gy-6">
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Mission</h4>
                  <p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p>
                </div>
              </div>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <img src="../../assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Our Values</h4>
                  <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
    </div>
    <!-- /.container -->
    <section class="wrapper bg-soft-primary mb-5">
      <div class="container py-5 py-md-7">
        <h2 class=" text-center mb-0">SECURITY SERVICES</h2>
      </div>
      <div class="overflow-hidden">
        <div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
            <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
          </svg></div>
      </div>
    </section>
  </section>
@endsection
@section('scripts')
@endsection
@extends('layout.web')
@section('title', __('services.title'))
@section('head')
  @parent
@endsection
@section('content')
  <section class="wrapper image-wrapper bg-image bg-overlay text-white " data-image-src="{{ asset('/img/fleet.jpg') }}">
    <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
      <div class="row">
        <div class="col-md-8 col-lg-10 col-xl-8 mx-auto">
          <div class="post-header">
            <!-- <div class="post-category text-line text-white">
              <a href="#" class="text-reset" rel="category">Identity</a>
            </div> -->
            <!-- /.post-category -->
            <h1 class="display-1 mb-3 text-white">Our services</h1>
            <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">Meet professional drivers and get into exclusive luxury cars for VIP transportation. Arrive or depart from the airport or any of our available destinations with the greatest comfort you can imagine.</p>
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
  <section id="snippet-1" class="wrapper bg-light wrapper-border grid">
    <div class="isotope">
      <div class="container  pt-0 pt-md-0 ">
        <div class="row isotope-filter filter">
          <div class="col-12 py-4">
            <p>Filter:</p>
            <ul>
              <li><a class="filter-item active" data-filter="*">{{ __('services.all') }}</a></li>
              <li><a class="filter-item" data-filter=".concierge">{{ __('services.concierge') }} </a></li>
              <li><a class="filter-item" data-filter=".security">{{ __('services.luxury') }} </a></li>
              <li><a class="filter-item" data-filter=".dmc">{{ __('services.security') }} </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="position-relative">
        <div class="item concierge w-100">
          
          <section class="wrapper bg-dark mb-5 ">
            <div class="container py-5 py-md-7">
              <h2 class="text-white text-center mb-0">{{ __('services.concierge') }} </h2>
            </div>
            <div class="overflow-hidden">
              <div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
                  <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                </svg></div>
            </div>
          </section>
          <div class="container pt-8 pt-md-8 pb-13 pb-md-15"> 
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center ">
              <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">Chaffeuring</h3>
                <p class="lead fs-lg">Wherever you wish to go, travel in style and comfort in Godandi’s luxury cars, in the hands of our experienced, exceptionally trained chauffeurs.</p>
                <p class="mb-6">Our chauffeurs will gladly accommodate any on-the-fly requests you may have at any point on your journey, and supported by our office team they can provide you with a wealth of advice and planning information. We take care of all arrangements so you can relax and enjoy your journey.</p>
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
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10 ">
              <div class="col-md-8 col-lg-6 col-xl-5 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">Travel Service</h3>
                <p class="lead fs-lg">Godandi provides concierge level travel services. Our clients, like you, are discerning travelers who look to us to provide them with unique travel experiences.</p>
                <p class="mb-6">We have the knowledge and resources to create a special trip that is as personal as your footprint. Whether it is a multi-generational trip seeking to bring togetherness to your family in faraway places, an exotic honeymoon, or a once in a lifetime safari, we work to make it happen. No request is too challenging, let us help you fulfill your next travel dream.</p>
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
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center ">
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
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10 ">
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
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center ">
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
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10 ">
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
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center ">
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
        </div>
        <div class="item security w-100">
          <section class="wrapper bg-dark mb-5">
            <div class="container py-5 py-md-7">
              <h2 class="text-white text-center mb-0">{{ __('services.luxury') }} </h2>
            </div>
            <div class="overflow-hidden">
              <div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
                  <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                </svg></div>
            </div>
          </section>
          <div class="container pt-8 pt-md-17 pb-13 pb-md-15 ">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">Security Assessment</h3>
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
                <h3 class=" mb-3">Armoured Vehicles</h3>
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
                <h3 class=" mb-3">Convoy Transportation</h3>
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
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10 ">
              <div class="col-md-8 col-lg-6 col-xl-5 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">Armed and Unarmed Guards</h3>
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
          </div>
          <!-- /.container -->
        </div>
        <div class="item dmc w-100">
          <section class="wrapper bg-dark mb-5 ">
            <div class="container py-5 py-md-7">
              <h2 class="text-white text-center mb-0">{{ __('services.security') }} </h2>
            </div>
            <div class="overflow-hidden">
              <div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
                  <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                </svg></div>
            </div>
          </section>
          <div class="container pt-8 pt-md-17 pb-13 pb-md-15">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">Corporate Travel</h3>
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
                <h3 class=" mb-3">Congress Organizer</h3>
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
                <h3 class=" mb-3">Meetings & Incentives</h3>
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
                <h3 class=" mb-3">Private & Public Events</h3>
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
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('scripts')
@endsection
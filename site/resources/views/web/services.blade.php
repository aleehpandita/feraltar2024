@extends('layout.web')
@section('title', __('services.title'))
@section('navBarStyle', 'dark')
@section('head')
@endsection
@section('content')
  <section class="wrapper image-wrapper bg-image bg-overlay text-white " data-image-src="{{ asset('/img/a9.jpg') }}">
    <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
      <div class="row">
        <div class="col-md-8 col-lg-10 col-xl-8 mx-auto">
          <div class="post-header">
            <!-- <div class="post-category text-line text-white">
              <a href="#" class="text-reset" rel="category">Identity</a>
            </div> -->
            <!-- /.post-category -->
            <h1 class="display-1 mb-3 text-white">{{ __('services.our') }}</h1>
            <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">{{ __('services.meet') }}</p>
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
            <p>{{ __('services.filter') }}:</p>
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
          <div class="container pt-4 pt-md-4 pb-13 pb-md-15"> 
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center ">
              <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/about7.jpg" srcset="../../assets/img/photos/about7.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.cha') }}</h3>
                <p>{{ __('services.p1') }}</p>
                <p class="mb-6">{{ __('services.p2') }}</p>
                <div class="row gx-xl-10 gy-6">
                  <div class="col-md-6">
                    <div class="d-flex flex-row">
                      <div>
                        <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                      </div>
                      <div>
                        <p class="mb-0">{{ __('services.p3') }}</p>
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
                        <p class="mb-0">{{ __('services.p4') }}</p>
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
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/about7-1.jpg" srcset="../../assets/img/photos/about7-1.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.tra1') }}</h3>
                <p class="lead fs-lg"></p>
                <p class="mb-6">{{ __('services.t1') }}</p>
                <div class="row gx-xl-10 gy-6">
                  <div class="col-md-6">
                    <div class="d-flex flex-row">
                      <div>
                        <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                      </div>
                      <div>
                        <h4 class="mb-1">{{ __('services.t2') }}</h4>
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
                        <h4 class="mb-1">{{ __('services.t3') }}</h4>
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
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/luxury.jpg" srcset="../../assets/img/photos/luxury.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.lux') }}</h3>
                <p class="">{{ __('services.l1') }}</p>
                <p class="mb-6">{{ __('services.l2') }} </p>
                <div class="row gx-xl-10 gy-6">
                  <div class="col-md-6">
                    <div class="d-flex flex-row">
                      <div>
                        <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                      </div>
                      <div>
                        <p class="mb-0">{{ __('services.l3') }}</p>
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
                        <p class="mb-0">{{ __('services.l4') }}</p>
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
          <section class="wrapper bg-dark mb-5">
            <div class="container py-5 py-md-7">
              <h2 class="text-white text-center mb-0">{{ __('services.security') }} </h2>
            </div>
            <div class="overflow-hidden">
              <div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
                  <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                </svg></div>
            </div>
          </section>
          <div class="container pt-4 pt-md-7 pb-13 pb-md-15 ">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/sec.jpg" srcset="../../assets/img/photos/sec.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.seca') }}</h3>
                <p class="text-justify">{{ __('services.sec1') }}</p>
                <div class="row gx-xl-10 gy-6">
                  <div class="col-md-6">
                    <div class="d-flex flex-row">
                      <div>
                        <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                      </div>
                      <div>
                        <p class="mb-0">{{ __('services.ourex') }}</p>
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
                        <p class="mb-0">{{ __('services.weoffer') }}</p>
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
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/vehi.jpg" srcset="../../assets/img/photos/vehi.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.armo') }}</h3>
                <p class="text-justify">{{ __('services.due') }}</p>
                <div class="row gx-xl-10 gy-6">
                  <div class="col-md-6">
                    <div class="d-flex flex-row">
                      <div>
                        <img src="../../assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                      </div>
                      <div>
                        <p class="mb-0">{{ __('services.ourfl') }}</p>
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
                        <p class="mb-0">{{ __('services.god') }}</p>
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
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/convoy.jpg" srcset="../../assets/img/photos/convoy.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.convoy') }}</h3>
                <p class="lead fs-lg text-justify">{{ __('services.c1') }}</p>
                <p class="mb-6 text-justify">{{ __('services.tra') }}</p>
               
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <hr class="my-8" />
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10 ">
              <div class="col-md-8 col-lg-6 col-xl-5 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/arme.jpg" srcset="../../assets/img/photos/arme.jpg" alt="{{ __('services.armealt') }}"></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.armour') }}</h3>
                <p class="lead fs-lg">{{ __('services.a1') }}</p>
                <p class="mb-6 text-justify">{{ __('services.a2') }}</p>
               
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /.container -->
        </div>
        <div class="item security w-100">
          <section class="wrapper bg-dark mb-5 ">
            <div class="container py-5 py-md-7">
              <h2 class="text-white text-center mb-0">{{ __('services.luxury') }} </h2>
            </div>
            <div class="overflow-hidden">
              <div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
                  <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                </svg></div>
            </div>
          </section>
          <div class="container pt-4 pt-md-7 pb-13 pb-md-15">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/cc1.jpg"  srcset="../../assets/img/photos/cc1.jpg" alt="{{ __('services.cc1alt') }}"</figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.cct') }}</h3>
                <p class="lead fs-lg">{{ __('services.ll1') }}</p>
                <p class="mb-2">- {{ __('services.cc1') }}</p>
                <p class="mb-2">- {{ __('services.cc2') }}</p>
                <p class="mb-2">- {{ __('services.cc3') }}</p>
                
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <hr class="my-8" />
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10">
              <div class="col-md-8 col-lg-6 col-xl-5 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/a51.jpg" srcset="../../assets/img/photos/a51.jpg 2x" alt="{{ __('services.a51alt') }}"></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.cc4') }}</h3>
                <p class="text-justify">{{ __('services.cc5') }}</p>
                <p class="text-justify">{{ __('services.cc6') }}</p>
               
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <hr class="my-8" />
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.7rem;"></div>
                <figure class="rounded"><img src="../../assets/img/photos/meet.jpg" alt="{{ __('services.meetalt') }}" srcset="../../assets/img/photos/meet.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.mee2') }}</h3>
                <p class="text-justify">{{ __('services.we1') }}</p>
                <p class="mb-6">{{ __('services.we2') }}</p>
               
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <hr class="my-8" />
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-10">
              <div class="col-md-8 col-lg-6 col-xl-5 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img alt='{{ __("services.ppalt") }}' src="../../assets/img/photos/pp.jpg" srcset="../../assets/img/photos/pp.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <h3 class=" mb-3">{{ __('services.pp1') }}</h3>
                <p class="text-justify">{{ __('services.pp') }}</p>
                
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
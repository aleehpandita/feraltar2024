@extends('layout.web')
@section('title', __('home.home'))
@section('navBarStyle', 'dark')
@section('head')
@endsection
@section('content')
	<section class="wrapper bg-dark">
	  <div class="swiper-container swiper-thumbs-container swiper-fullscreen nav-dark" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="false" data-items="1" data-thumbs="true">
	    <div class="swiper">
	      <div class="swiper-wrapper">
	        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg28.jpg"></div>
	        <!-- <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg29.jpg"></div>
	        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg30.jpg"></div>
	        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg31.jpg"></div> -->
	      </div>
	      <!--/.swiper-wrapper -->
	    </div>
	    <!-- /.swiper -->
	    <div class="swiper swiper-thumbs">
	      <div class="swiper-wrapper">
	        <div class="swiper-slide"><img src="./assets/img/photos/bg28-th.jpg" srcset="./assets/img/photos/bg28-th@2x.jpg 2x" alt="" /></div>
	        <!-- <div class="swiper-slide"><img src="./assets/img/photos/bg29-th.jpg" srcset="./assets/img/photos/bg29-th@2x.jpg 2x" alt="" /></div>
	        <div class="swiper-slide"><img src="./assets/img/photos/bg30-th.jpg" srcset="./assets/img/photos/bg30-th@2x.jpg 2x" alt="" /></div>
	        <div class="swiper-slide"><img src="./assets/img/photos/bg31-th.jpg" srcset="./assets/img/photos/bg31-th@2x.jpg 2x" alt="" /></div> -->
	      </div>
	      <!--/.swiper-wrapper -->
	    </div>
	    <!-- /.swiper -->
	    <div class="swiper-static">
	      <div class="container h-100 d-flex align-items-center justify-content-center">
	        <div class="row">
	          <div class="col-lg-12 mx-auto mt-n10 text-center">
	            <h1 class="fs-19 text-uppercase ls-xl text-white mb-3 animate__animated animate__zoomIn animate__delay-1s">We specialize in luxury transportation <br/> An outstanding private transfer service</h1>
	            <h2 class="display-1 fs-60 text-white mb-0 animate__animated animate__zoomIn animate__delay-2s">NEED A RIDE?</h2>
				<a href="{{route(App::getLocale().'.contact')}}" class="btn btn-lg btn-white rounded mb-10">Request a Quote</a>
	          </div>
	          <!-- /column -->
	        </div>
	        <!-- /.row -->
	      </div>
	      <!-- /.container -->
	    </div>
	    <!-- /.swiper-static -->
	  </div>
	  <!-- /.swiper-container -->
	</section>
	<!-- /section -->
	<section class="wrapper bg-light">
	  <div class="container py-14 py-md-16">
	    <div class="row">
	      <div class="col-lg-12 col-xl-10 col-xxl-7 mx-auto text-center">
	        <i class="icn-flower text-leaf fs-30 opacity-25"></i>
	        <h2 class="display-5 text-center mt-2 mb-10">I absolutely love shooting weddings and couples because there are so many feelings to capture.</h2>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	    <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="#"><img class="img-fluid" src="./assets/img/photos/fs1.jpg" srcset="./assets/img/photos/fs1@2x.jpg 2x" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">View Gallery</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">Wedding</h3>
	          </div>
	          <!--/.card-body -->
	        </div>
	        <!-- /.card -->
	      </div>
	      <!--/column -->
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="#"><img class="img-fluid" src="./assets/img/photos/fs2.jpg" srcset="./assets/img/photos/fs2@2x.jpg 2x" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">View Gallery</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">Couples</h3>
	          </div>
	          <!--/.card-body -->
	        </div>
	        <!-- /.card -->
	      </div>
	      <!--/column -->
	      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
	        <div class="card shadow-lg">
	          <figure class="card-img-top overlay overlay-1">
	            <a href="#"><img class="img-fluid" src="./assets/img/photos/fs3.jpg" srcset="./assets/img/photos/fs3@2x.jpg 2x" alt="" /></a>
	            <figcaption>
	              <h5 class="from-top mb-0">View Gallery</h5>
	            </figcaption>
	          </figure>
	          <div class="card-body p-6">
	            <h3 class="fs-21 mb-0">Engagement</h3>
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
	<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/bg32.jpg">
	  <div class="container py-14 py-md-17 text-center">
	    <i class="icn-flower text-white fs-30 opacity-50"></i>
	    <div class="row mt-3">
	      <div class="col-xl-9 col-xxl-8 mx-auto">
	        <div class="swiper-container dots-light dots-closer mb-6" data-margin="30" data-dots="true">
	          <div class="swiper">
	            <div class="swiper-wrapper">
	              <div class="swiper-slide">
	                <blockquote class="border-0 fs-24 mb-0">
	                  <p>“Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh fermentum massa, justo sit amet vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus.”</p>
	                  <div class="blockquote-details justify-content-center">
	                    <div class="info p-0">
	                      <h6 class="mb-0 text-white">Julia & David</h6>
	                    </div>
	                  </div>
	                </blockquote>
	              </div>
	              <!--/.swiper-slide -->
	              <div class="swiper-slide">
	                <blockquote class="border-0 fs-24 mb-0">
	                  <p>“Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh fermentum massa, justo sit amet vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus.”</p>
	                  <div class="blockquote-details justify-content-center">
	                    <div class="info p-0">
	                      <h6 class="mb-0 text-white">Jolene & Andrea</h6>
	                    </div>
	                  </div>
	                </blockquote>
	              </div>
	              <!--/.swiper-slide -->
	              <div class="swiper-slide">
	                <blockquote class="border-0 fs-24 mb-0">
	                  <p>“Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh fermentum massa, justo sit amet vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus.”</p>
	                  <div class="blockquote-details justify-content-center">
	                    <div class="info p-0">
	                      <h6 class="mb-0 text-white">Eve & Will</h6>
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
	  <div class="container py-14 py-md-16">
	    <div class="row">
	      <div class="col-xl-9 col-xxl-7 mx-auto text-center">
	        <i class="icn-flower text-leaf fs-30 opacity-25"></i>
	        <h2 class="display-5 text-center mt-2 mb-10">I would like to give you a unique photography and video experience, built to serve you best.</h2>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	    <div class="row text-center">
	      <div class="col-xl-9 mx-auto">
	        <div class="player" data-plyr-provider="vimeo" data-plyr-embed-id="94837904"></div>
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
	    <div class="container py-14 py-md-16">
	      <div class="row">
	        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
	          <i class="icn-flower text-leaf fs-30 opacity-25"></i>
	          <h2 class="display-5 text-center mt-2 mb-10">Some of wonderful love stories <br class="d-none d-md-block"> I witnessed and had the chance to capture</h2>
	        </div>
	        <!--/column -->
	      </div>
	      <!--/.row -->
	      <div class="swiper-container grid-view nav-bottom nav-color mb-14 text-center" data-margin="30" data-dots="false" data-nav="true" data-items-md="2" data-items-xs="1">
	        <div class="swiper overflow-visible pb-2">
	          <div class="swiper-wrapper">
	            <div class="swiper-slide">
	              <div class="card shadow-lg">
	                <figure class="card-img-top overlay overlay-1">
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/fc1.jpg" srcset="./assets/img/photos/fc1@2x.jpg 2x" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">View Gallery</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Lucy & David</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                    <li>5 Photos</li>
	                    <li>Wedding</li>
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
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/fc2.jpg" srcset="./assets/img/photos/fc2@2x.jpg 2x" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">View Gallery</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Stacy & Thomas</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                    <li>8 Photos</li>
	                    <li>Wedding</li>
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
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/fc3.jpg" srcset="./assets/img/photos/fc3@2x.jpg 2x" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">View Gallery</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Katherine & Jack</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                    <li>7 Photos</li>
	                    <li>Couples</li>
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
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/fc4.jpg" srcset="./assets/img/photos/fc4@2x.jpg 2x" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">View Gallery</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Jolene & William</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                    <li>9 Photos</li>
	                    <li>Wedding</li>
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
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/fc5.jpg" srcset="./assets/img/photos/fc5@2x.jpg 2x" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">View Gallery</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Jenn & Richard</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                    <li>6 Photos</li>
	                    <li>Engagement</li>
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
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/fc6.jpg" srcset="./assets/img/photos/fc6@2x.jpg 2x" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">View Gallery</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Gloria & Leo</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                    <li>8 Photos</li>
	                    <li>Wedding</li>
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
	                  <a href="#"><img class="img-fluid" src="./assets/img/photos/fc7.jpg" srcset="./assets/img/photos/fc7@2x.jpg 2x" alt="" /></a>
	                  <figcaption>
	                    <h5 class="from-top mb-0">View Gallery</h5>
	                  </figcaption>
	                </figure>
	                <div class="card-body p-6">
	                  <h3 class="fs-21 mb-1">Grace & Finn</h3>
	                  <ul class="post-meta fs-16 mb-0">
	                    <li>7 Photos</li>
	                    <li>Engagement</li>
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
	        <i class="icn-flower text-white fs-30 opacity-50"></i>
	        <h2 class="display-4 text-white mt-2 mb-7">I'm here to capture your moments. Looking for a caring, fun, passionate photographer?</h2>
	        <a href="#" class="btn btn-white rounded-pill mb-5">Contact Me</a>
	      </div>
	      <!--/column -->
	    </div>
	    <!--/.row -->
	  </div>
	  <!-- /.container -->
	</section>
	<!-- /section -->
	<section class="wrapper bg-light">
	  <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
	    <div class="row gx-md-8 gx-xl-12 gy-6 align-items-center">
	      <div class="col-md-8 col-lg-6 mx-auto">
	        <div class="img-mask mask-1"><img src="./assets/img/photos/about29.jpg" srcset="./assets/img/photos/about29@2x.jpg 2x" alt="" /></div>
	      </div>
	      <!--/column -->
	      <div class="col-lg-6">
	        <h2 class="display-5 mb-5">Hi, I'm Julia, a documentary wedding and couples photographer currently working from and based in London.</h2>
	        <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio. Sed posuere consectetur est at lobortis facilisis in.</p>
	        <div class="row counter-wrapper gy-6">
	          <div class="col-md-4">
	            <h3 class="counter">500K+</h3>
	            <p>Shots Taken</p>
	          </div>
	          <!--/column -->
	          <div class="col-md-4">
	            <h3 class="counter">500+</h3>
	            <p>Happy Clients</p>
	          </div>
	          <!--/column -->
	          <div class="col-md-4">
	            <h3 class="counter">25</h3>
	            <p>Awards Won</p>
	          </div>
	          <!--/column -->
	        </div>
	        <!--/.row -->
	      </div>
	      <!--/column -->
	    </div>
	    <!-- /.row -->
	    <div class="row gx-md-8 gx-xl-12 gy-6 mt-8">
	      <div class="col-lg-4">
	        <h3>My Skills</h3>
	        <p>Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna vel consectetur purus sit amet fermentum.</p>
	        <ul class="progress-list">
	          <li>
	            <p>Photoshop</p>
	            <div class="progressbar line soft-primary" data-value="100"></div>
	          </li>
	          <li>
	            <p>Final Cut</p>
	            <div class="progressbar line soft-primary" data-value="80"></div>
	          </li>
	          <li>
	            <p>Motion Video</p>
	            <div class="progressbar line soft-primary" data-value="85"></div>
	          </li>
	          <li>
	            <p>Manupilation</p>
	            <div class="progressbar line soft-primary" data-value="75"></div>
	          </li>
	        </ul>
	        <!-- /.progress-list -->
	      </div>
	      <!-- /column -->
	      <div class="col-lg-4">
	        <h3>Why Choose Me?</h3>
	        <p>Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Nullam id dolor id nibh ultricies. Cras mattis consectetur purus amet fermentum.</p>
	        <ul class="icon-list bullet-bg bullet-soft-primary">
	          <li><i class="uil uil-check"></i>Aenean eu leo quam pellentesque.</li>
	          <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis.</li>
	          <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida.</li>
	          <li><i class="uil uil-check"></i>Fusce dapibus tellus ac commodo.</li>
	          <li><i class="uil uil-check"></i>Cras justo odio dapibus ac facilisis in.</li>
	        </ul>
	      </div>
	      <!-- /column -->
	      <div class="col-lg-4">
	        <h3>My Process</h3>
	        <div class="d-flex flex-row mb-5">
	          <div>
	            <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">1</span></span>
	          </div>
	          <div>
	            <h5 class="mb-1">Collect Ideas</h5>
	            <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.</p>
	          </div>
	        </div>
	        <div class="d-flex flex-row mb-5">
	          <div>
	            <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">2</span></span>
	          </div>
	          <div>
	            <h5 class="mb-1">Data Analysis</h5>
	            <p class="mb-0">Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada magna.</p>
	          </div>
	        </div>
	        <div class="d-flex flex-row">
	          <div>
	            <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">3</span></span>
	          </div>
	          <div>
	            <h5 class="mb-1">Finalize Product</h5>
	            <p class="mb-0">Cras mattis consectetur purus sit amet. Aenean lacinia bibendum nulla sed.</p>
	          </div>
	        </div>
	      </div>
	      <!-- /column -->
	    </div>
	    <!-- /.row -->
	  </div>
	  <!-- /.container -->
	</section>
	<!-- /section -->
	<section class="wrapper bg-soft-primary">
	  <div class="overflow-hidden">
	    <div class="container py-14 py-md-16">
	      <div class="row">
	        <div class="col-xl-7 col-xxl-6 mx-auto text-center">
	          <i class="icn-flower text-leaf fs-30 opacity-25"></i>
	          <h2 class="display-5 text-center mt-2 mb-10">Here are the latest posts from my blog that grabbed the most attention.</h2>
	        </div>
	        <!--/column -->
	      </div>
	      <!--/.row -->
	      <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-lg="3" data-items-md="2" data-items-xs="1">
	        <div class="swiper overflow-visible pb-2">
	          <div class="swiper-wrapper">
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/b12.jpg" srcset="./assets/img/photos/b12@2x.jpg 2x" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">Read More</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">Wedding</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
	                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/b13.jpg" srcset="./assets/img/photos/b13@2x.jpg 2x" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">Read More</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">Engagement</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>
	                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/b14.jpg" srcset="./assets/img/photos/b14@2x.jpg 2x" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">Read More</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">Couples</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span></li>
	                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/b15.jpg" srcset="./assets/img/photos/b15@2x.jpg 2x" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">Read More</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">Engagement</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17 Jan 2022</span></li>
	                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/b16.jpg" srcset="./assets/img/photos/b16@2x.jpg 2x" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">Read More</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">Couples</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nulla vitae elit libero</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span></li>
	                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>1</a></li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
	            </div>
	            <!--/.swiper-slide -->
	            <div class="swiper-slide">
	              <article>
	                <div class="card shadow-lg">
	                  <figure class="card-img-top overlay overlay-1"><a href="#"> <img src="./assets/img/photos/b17.jpg" srcset="./assets/img/photos/b17@2x.jpg 2x" alt="" /></a>
	                    <figcaption>
	                      <h5 class="from-top mb-0">Read More</h5>
	                    </figcaption>
	                  </figure>
	                  <div class="card-body p-6">
	                    <div class="post-header">
	                      <div class="post-category">
	                        <a href="#" class="hover" rel="category">Wedding</a>
	                      </div>
	                      <!-- /.post-category -->
	                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Pharetra augue elit sem</a></h2>
	                    </div>
	                    <!-- /.post-header -->
	                    <div class="post-footer">
	                      <ul class="post-meta d-flex mb-0">
	                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>2 Jan 2022</span></li>
	                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
	                      </ul>
	                      <!-- /.post-meta -->
	                    </div>
	                    <!-- /.post-footer -->
	                  </div>
	                  <!--/.card-body -->
	                </div>
	                <!-- /.card -->
	              </article>
	              <!-- /article -->
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
@endsection
@section('scripts')
@endsection
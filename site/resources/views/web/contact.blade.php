@extends('layout.web')
@section('title', __('home.home'))
@section('head')
  @parent
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
@section('content')
  <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="./assets/img/photos/bg3.jpg">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="display-1 mb-3 text-white">{{ __('contact.get-in-touch') }}</h1>
          <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
              <li class="breadcrumb-item"><a href="#">{{ __('contact.Home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('contact.Contact') }}</li>
            </ol>
          </nav>
          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light angled upper-end">
    <div class="container pb-11">
      <div class="row mb-14 mb-md-16">
        <div class="col-xl-10 mx-auto mt-n19">
          <div class="card">
            <div class="row gx-0">
              <div class="col-lg-6 align-self-stretch">
                <div class="map map-full rounded-top rounded-lg-start">
                  <iframe src="{{ $SITE_CONFIGURATION->google_map_business }}" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                </div>
                <!-- /.map -->
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <div class="p-10 p-md-11 p-lg-14">
                  <div class="d-flex flex-row">
                    <div>
                      <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                    </div>
                    <div class="align-self-start justify-content-start">
                      <h5 class="mb-1">{{ __('contact.Address') }}</h5>
                      <address>{!! $SITE_CONFIGURATION->address !!}</address>
                    </div>
                  </div>
                  <!--/div -->
                  <div class="d-flex flex-row">
                    <div>
                      <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                    </div>
                    <div>
                      <h5 class="mb-1">{{ __('contact.Phone') }}</h5>
                      <p>
                        @php
                        $phones = explode(',', $SITE_CONFIGURATION->contact_phones);
                        @endphp
                        @foreach($phones as $p)
                          <a href="tel:{{ $p }}">{{ $p }}</a><br>
                        @endforeach
                      </p>
                    </div>
                  </div>
                  <!--/div -->
                  <div class="d-flex flex-row">
                    <div>
                      <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                    </div>
                    <div>
                      <h5 class="mb-1">E-mail</h5>
                      @php
                      $emails = explode(',', $SITE_CONFIGURATION->contact_emails);
                      @endphp
                      @foreach($emails as $e)
                        <p class="mb-0"><a class="link-body" href="mailto:{{ $e }}">{{ $e }}</a></p>
                      @endforeach
                    </div>
                  </div>
                  <!--/div -->
                </div>
                <!--/div -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
          <h2 class="display-4 mb-3 text-center">{{ __('contact.Drop-Us-a-Line') }}</h2>
          <p class="lead text-center mb-10">{{ __('contact.Reach-out') }}</p>
          <form class="contact-form needs-validation" method="post" action="{{route(App::getLocale().'.sendContact')}}" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="messages"></div>
            <div class="row gx-4">
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                  <label for="form_name">{{ __('contact.First Name') }} *</label>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Enter First Name') }} </div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                  <label for="form_lastname">{{ __('contact.Last Name') }} *</label>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Phone') }} </div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                  <label for="form_email">Email *</label>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Enter valid email') }} </div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-12">
                <div class="form-floating mb-4">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                  <label for="form_message">{{ __('contact.Message') }} *</label>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Enter message') }}  </div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-12 text-center">
                <input type="hidden" id="recaptcha_token" name="recaptcha_token">
                <div class="g-recaptcha"
                      data-sitekey="{{ $SITE_CONFIGURATION->recapcha_site_key }}"
                      data-callback="onSubmit"
                      data-size="invisible">
                </div>
                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('contact.Send message') }}">
                <p class="text-muted"><strong>*</strong> {{ __('contact.fields required') }}</p>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </form>
          <!-- /form -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map" data-image-src="./assets/img/map.png">
    <div class="container pt-0 pb-14 pt-md-16 pb-md-18">
      <div class="row">
        <div class="col-lg-9 col-xxl-8 mx-auto">
          <h3 class="display-4 mb-8 px-xl-12">We are trusted by over 5000+ clients. Join them now and grow your business.</h3>
        </div>
        <!-- /.row -->
      </div>
      <!-- /column -->
      <div class="row">
        <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
          <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
            <div class="col-md-4 text-center">
              <h3 class="counter counter-lg text-primary">7518</h3>
              <p>Completed Projects</p>
            </div>
            <!--/column -->
            <div class="col-md-4 text-center">
              <h3 class="counter counter-lg text-primary">5472</h3>
              <p>Satisfied Customers</p>
            </div>
            <!--/column -->
            <div class="col-md-4 text-center">
              <h3 class="counter counter-lg text-primary">2184</h3>
              <p>Expert Employees</p>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection
@section('scripts')
@endsection
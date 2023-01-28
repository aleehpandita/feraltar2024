@extends('layout.web')
@section('title', __('home.home'))
@section('head')
  @parent
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.02.min.css">
  <style>
    .autocomplete > ul[hidden], .autocomplete > ul:empty {
      display: block;
      opacity: 0;
      transform: scale(0);
    }
    .autocomplete > ul {
      position: absolute;
      max-height: 226px;
      overflow-y: scroll;
      box-sizing: border-box;
      left: 0;
      right: 0;
      margin: 0.5rem 0 0 0;
      padding: 0;
      z-index: 1;
      list-style: none;
      border-radius: 0.6rem;
      background-color: #fff;
      border: 1px solid rgba(33, 33, 33, 0.07);
      box-shadow: 0 3px 6px rgb(149 157 165 / 15%);
      outline: none;
      transition: opacity 0.15s ease-in-out;
      -moz-transition: opacity 0.15s ease-in-out;
      -webkit-transition: opacity 0.15s ease-in-out;
    }
    .autocomplete > ul > li:hover {
      cursor: pointer;
      background-color: rgba(255, 122, 122, 0.15);
    }
    .autocomplete > ul > li {
      margin: 0.3rem;
      padding: 0.3rem 0.5rem;
      text-align: left;
      font-size: 1rem;
      color: #212121;
      border-radius: 0.35rem;
      background-color: rgba(255, 255, 255, 1);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      transition: all 0.2s ease;
    }
    .autocomplete > ul > .no_result {
      padding: 0.3rem 0.5rem;
    }
    .form-floating>.input-group>.form-control {
      padding-bottom: 0;
      line-height: 1.25;
    }
    .form-floating>.input-group>.form-control::placeholder {
      color: transparent;
    }
    .form-floating>.input-group>label {
      padding-top: 0.65rem;
    }

    .form-floating>.input-group>label {
      color: #959ca9;
      font-size: .75rem;
    }
    .form-floating>.input-group>label {
      position: absolute;
      top: 0;
      left: 54px;
      width: 100%;
      height: 100%;
      padding: 0.6rem 1rem;
      overflow: hidden;
      text-align: start;
      text-overflow: ellipsis;
      white-space: nowrap;
      pointer-events: none;
      border: 1px solid transparent;
      transform-origin: 0 0;
      transition: opacity .1s ease-in-out,transform .1s ease-in-out;
    }
    .form-floating>.input-group>.form-control:focus~label, .form-floating>.input-group>.form-control:not(:placeholder-shown)~label {
      opacity: 1;
      transform: scale(.8) translateY(-0.4rem) translateX(0.2rem);
    }
    .form-floating .input-group>.form-control:focus, .input-group>.form-select:focus {
      z-index: 0;
    }
    .was-validated .form-floating .input-group>.form-control:not(:focus):valid{
      z-index: 0;
    }
    .was-validated .form-floating .input-group>.form-control:not(:focus):invalid {
      z-index: 0;
    }
    /*.form-floating>.input-group>.form-control:not(:placeholder-shown) {
      padding-top: 1rem;
      padding-bottom: 0.2rem;
    }*/
  </style>
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
      <div class="row">
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
                      <!-- <h5 class="mb-1">{{ __('contact.Phone') }}</h5> -->
                      <h6>USA / CANADA Toll free:</h6>
                      <p><a href="tel:{{$SITE_CONFIGURATION->usa_canada_toll_free}}">{{$SITE_CONFIGURATION->usa_canada_toll_free}}</a></p>
                      <h6>National call center:</h6>
                      <p><a href="tel:{{$SITE_CONFIGURATION->usa_canada_toll_free}}">{{$SITE_CONFIGURATION->national_call_}}</a></p>
                      <h6>Ciudad de Mexico:</h6>
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
      <div class="row pt-14 pt-md-16" id="drop-us-line">
        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
          <h2 class="display-4 mb-3 text-center">{{ __('contact.Drop-Us-a-Line') }}</h2>
          <p class="lead text-center mb-10">{{ __('contact.Reach-out') }}</p>
          <form id="form" class="contact-form needs-validation" method="post" action="{{route(App::getLocale().'.sendContact')}}" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="messages"></div>
            <div class="row gx-4">
              <div class="col-md-12">
                <div class="form-floating mb-4 autocomplete">
                  <input id="autoComplete" name="destination" type="search" class="form-control" placeholder="Hola">
                  <label for="autoComplete">{{ __('contact.Destination') }} *</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="uil uil-location-point"></i></span>
                    <input id="pickup" type="text" name="pickup" class="form-control" placeholder="Jane" required>
                    <label for="pickup">{{ __('contact.Pickup') }} *</label>
                  </div>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Enter Pickup') }} </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="uil uil-calendar-alt"></i></span>
                    <input id="pickup_date" type="text" name="pickup_date" class="form-control" placeholder="Jane" required>
                    <label for="pickup_date">{{ __('contact.Pickup Date') }} *</label>
                  </div>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Enter Pickup Date') }} </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="uil uil-location-point"></i></span>
                    <input id="dropoff" type="text" name="dropoff" class="form-control" placeholder="Jane" required>
                    <label for="dropoff">{{ __('contact.Dropoff') }} *</label>
                  </div>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Enter Dropoff') }} </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="uil uil-calendar-alt"></i></span>
                    <input id="dropoff_date" type="text" name="dropoff_date" class="form-control" placeholder="Jane" required>
                    <label for="dropoff_date">{{ __('contact.Dropoff Date') }} *</label>
                  </div>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Enter Dropoff Date') }} </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="uil uil-users-alt"></i></span>
                    <select class="form-select" id="pax" name="pax" required>
                      <option value="" selected>{{ __('contact.Passengers') }}</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="+10">+10</option>
                    </select>
                    <!-- <label for="dropoff_date">{{ __('contact.Dropoff Date') }} *</label> -->
                  </div>
                  <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                  <div class="invalid-feedback"> {{ __('contact.Enter Dropoff Date') }} </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked"> Roundtrip </label>
                </div>
              </div>
              <div class="col-12">
                <hr class="my-4">
              </div>
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
                <input id="btn-submit" type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('contact.Please wait') }}">
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
<script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
<script>
  /*const autoCompleteJS = new autoComplete({
    selector: "#autoComplete",
    //placeHolder: "",
    wrapper: false,
    data: {
      src: [
        'CD Mexico', 'Monterrey', 'Guadalajara', 'Los cabos', 'Cancun', 'Vallarta',
        'Republica  Dominicana', 'Santo Domingo', 'Punta Cana',
        'Buenos aires',
        'Sao paulo ',
        'Río de Janeiro',
        'Bogota',
        'Medellin',
        'Liberia ',
        'San José en Costa rica',
        'Santiago de chile',
        'San salvador',
        'Guatemala',
        'Panamá',
        'Puerto rico',
        'Lima',
        'Cusco',
        'Miami',
        'Orlando ',
        'New York',
        'Los Angeles',
        'San Francisco',
        'Atlanta',
        'Hawai',
        'Las vegas',
        'Dallas',
        'Monte video',
        'Punta del Este en Uruguay',
        'España',
        'Francia',
        'Alemania',
        'Japón',
        'Corea'
      ],
      cache: true,
    },
    resultsList: {
      element: (list, data) => {
        if (!data.results.length) {
          // Create "No Results" message element
          const message = document.createElement("div");
          // Add class to the created element
          message.setAttribute("class", "no_result");
          // Add message text content
          message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
          // Append message element to the results list
          list.prepend(message);
        }
      },
      noResults: true,
    },
    resultItem: {
      highlight: true
    },
    events: {
      input: {
        selection: (event) => {
          const selection = event.detail.selection.value;
          autoCompleteJS.input.value = selection;
        }
      }
    }
  });*/
  document.addEventListener("DOMContentLoaded", function(event) { 
    document.getElementById('btn-submit').value = '{{ __('contact.Send message') }}'
  });
</script>
@endsection
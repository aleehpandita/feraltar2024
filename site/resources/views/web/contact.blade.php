@extends('layout.web')
@section('title', __('home.home'))
@section('head')
@parent
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
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
<!-- Tempus Dominus Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.10/dist/css/tempus-dominus.min.css" crossorigin="anonymous">
@endsection
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{ asset('assets/img/photos/slide5.jpg') }}">
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
      <div class="row pt-7 pt-md-8" id="drop-us-line">
         <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <h2 class="display-4 mb-3 text-center">{{ __('contact.Drop-Us-a-Line') }}</h2>
            <p class="lead text-center mb-10">{{ __('contact.Reach-out') }}</p>
            <form id="form" class="contact-form needs-validation" method="post" action="{{route(App::getLocale().'.sendContact')}}" novalidate>
               <input type="hidden" name="_token" value="{{ csrf_token() }}" />
               <div class="messages"></div>
               <div class="row gx-4">
                  <div class="col-md-12">
                     <div class="form-floating mb-4 autocomplete">
                        <input id="autoComplete" name="destination" type="search" class="form-control" placeholder="Hola" required>
                        <label for="autoComplete">{{ __('contact.Destination') }} *</label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="pickup-addon1"><i class="uil uil-location-point"></i></span>
                           <input id="pickup" type="text" name="pickup" class="form-control" placeholder="Jane" required>
                           <label for="pickup">{{ __('contact.Pickup') }} *</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Pickup') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="pickup_date-addon1"><i class="uil uil-calendar-alt"></i></span>
                           <input id="pickup_date" type="text" name="pickup_date" class="form-control" placeholder="Jane" required>
                           <label for="pickup_date">{{ __('contact.Pickup Date') }} *</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Pickup Date') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="arrvial_flight-addon1"><i class="uil uil-plane-arrival"></i></span>
                           <input id="arrival_flight" type="text" name="arrival_flight" class="form-control" placeholder="Jane" >
                           <label for="arrival_flight">{{ __('contact.Arrival Flight') }}</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="dropoff-addon1"><i class="uil uil-location-point"></i></span>
                           <input id="dropoff" type="text" name="dropoff" class="form-control" placeholder="Jane" required>
                           <label for="dropoff">{{ __('contact.Dropoff') }} *</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Dropoff') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="dropoff_date-addon1"><i class="uil uil-calendar-alt"></i></span>
                           <input id="dropoff_date" type="text" name="dropoff_date" class="form-control" placeholder="Jane" required>
                           <label for="dropoff_date">{{ __('contact.Dropoff Date') }} *</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Dropoff Date') }} </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-floating mb-4">
                        <div class="input-group">
                           <span class="input-group-text" id="departure_flight-addon1"><i class="uil uil-plane-departure"></i></span>
                           <input id="departure_flight" type="text" name="departure_flight" class="form-control" placeholder="Jane">
                           <label for="departure_flight">{{ __('contact.Departure Flight') }}</label>
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <!-- <div class="invalid-feedback"> {{ __('contact.Enter Dropoff Date') }} </div> -->
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
                        </div>
                        <div class="valid-feedback"> {{ __('contact.Looks good') }} </div>
                        <div class="invalid-feedback"> {{ __('contact.Enter Dropoff Date') }} </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-check">
                        <input class="form-check-input" name="roundtrip" type="checkbox" value="1" id="flexCheckChecked" checked>
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
   <div class="container pt-0 pb-14 pt-md-6 pb-md-4">
      <div class="row">
         <div class="col-lg-9 col-xxl-8 mx-auto">
            <h3 class="display-4 mb-8 px-xl-12">{{ __('contact.wearetru') }}</h3>
         </div>
         <!-- /.row -->
      </div>
      <!-- /column -->
      <div class="row">
         <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
            <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
               <div class="col-md-4 text-center">
                  <h3 class="counter counter-lg text-primary">7518</h3>
                  <p>{{ __('contact.compl1') }}</p>
               </div>
               <!--/column -->
               <div class="col-md-4 text-center">
                  <h3 class="counter counter-lg text-primary">5472</h3>
                  <p>{{ __('contact.sat1') }}</p>
               </div>
               <!--/column -->
               <div class="col-md-4 text-center">
                  <h3 class="counter counter-lg text-primary">2184</h3>
                  <p>{{ __('contact.exp1') }}</p>
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
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7">
        <figure><img class="w-auto" src="{{ asset('assets/img/illustrations/i5.png') }}" srcset="{{ asset('assets/img/illustrations/i5@2x.png') }} 2x" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Get In Touch</h2>
        <h3 class="display-5 mb-7">Got any questions? Don't hesitate to get in touch.</h3>
        <!-- <h2 class="display-4 mb-8">{{ __('about.convinced') }}</h2> -->
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">{{ __('about.address') }}</h5>
                  <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London, United Kingdom</address>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">{{ __('about.phone') }}</h5>
                  <p>+52 (55) 5654 0089</p>
                  <p>+52 (55) 5740 1466</p>
                  <p>+52 (55) 4754 5981</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">NATIONAL CALL CENTER</h5>
                  <p>01-800-832-6889</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">USA / CANADA TOLL FREE:</h5>
                  <p>1-800-704-2942</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">E-mail</h5>
                  <p class="mb-0"><a href="mailto:info@godandiandsons.com" class="link-body">info@godandiandsons.com</a></p>
                  <p class="mb-0"><a href="mailto:reserve@godandiandsons.com" class="link-body"> reserve@godandiandsons.com</a></p>
                  <p class="mb-0"><a href="mailto:info@godandi.globalm" class="link-body">info@godandi.global</a></p>
               </div>
            </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->


<!-- /section -->
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.10/dist/js/tempus-dominus.min.js" crossorigin="anonymous"></script>
<script>
   function onSubmit(token) {
     const form = document.getElementById('form')
     var data = new FormData(form);
     var entries = data.entries()
     var rqData = {}
     var alertClass = 'alert-danger';
     Loader.open()
     for (const pair of entries) {
       rqData[pair[0]] = pair[1]
     }
     fetch(form.getAttribute('action'), {
       method: "post",
       body: JSON.stringify(rqData),
       headers: {
         'X-CSRF-TOKEN': window.CSRF_TOKEN,
         'Accept': 'application/json',
         'Content-Type': 'application/json'
         // 'Content-Type': 'application/x-www-form-urlencoded',
       },
     }).then((response) => {
       if(response.ok) {
         alertClass = 'alert-success';
       }
       return response.json();
       //return response.text();
     }).then((data) => {
       var alertBox = '<div class="alert ' + alertClass + ' alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' + data.message + '</div>';
       if(alertClass && data.message) {
         form.querySelector(".messages").insertAdjacentHTML('beforeend', alertBox);
         form.reset();
         grecaptcha.reset();
         Loader.close()
       }
     }).catch((err) => {
       console.log(err);
       Loader.close()
     });
     
   }
</script>
<script>
   new tempusDominus.TempusDominus(document.getElementById('pickup_date'), {
     //put your config here
     display:{
       sideBySide: true,
       buttons:{
         close:true,
       },
       icons: {
         close: 'uil uil-times-square'
       },
     }
   });
   new tempusDominus.TempusDominus(document.getElementById('dropoff_date'), {
     //put your config here
     display:{
       sideBySide: true,
       buttons:{
         close:true,
       },
       icons: {
         close: 'uil uil-times-square'
       },
     }
   });
   
   const autoCompleteJS = new autoComplete({
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
         'Punta del Este en Uruguay'
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
   });
   
   document.addEventListener("DOMContentLoaded", function(event) { 
     document.getElementById('btn-submit').value = '{{ __('contact.Send message') }}'
   });
</script>
@endsection
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
                  <address>Cancun International Airport <br class="d-none d-md-block" />Cancún, México</address>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1">{{ __('about.phone') }}</h5>
                  <p>+52 998 109 9789</p>
                  <p>+52 998 898 49 77</p>
                  <p>+52 998 898 49 79</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
               <h5 class="mb-1">MEXICO TOLL FREE</h5>
               <p>800 099 1746</p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
               <h5 class="mb-1">USA / CANADA TOLL FREE:</h5>
               <p>1-888-644-7803</p>
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
         'República  Dominicana', 'Santo Domingo', 'Punta Cana',
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
         'Los Ángeles',
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
@extends('layouts.weblayout')

@section('content')

@include('includes.header')
         <header class="ct-pageHeader ct-pageHeader-center ct-mediaSection" data-height="151" data-background="./web_assets/images/demo-content/header.jpg" data-background-mobile="./web_assets/images/demo-content/header.jpg">
             <div class="ct-mediaSection-inner">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12">
                             <div class="ct-sectionHeader ct-sectionHeader--type1">
                                 <h3 class="ct-sectionHeader-title text-uppercase">  GUEST ROOMS</h3>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </header>

         

         <section data-background="#ffffff">
             <div class="ct-gallery-static ct-gallery--col3 no-loaded">
                 <div class="ct-gallery-item ct-gallery-item--masonry"><!-- Gallery's 1 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <figure class="ct-imageBox ct-imageBox--type4">
                                 <img class="media-object" src="web_assets/images/demo-content/offer-thumbnail-1.jpg" alt="Image" />
                                 <figcaption>
                                     <span>late morning </span>
                                     <h2 class="ct-imageBox-title">High class  </h2>
                                 </figcaption>
                             </figure>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry"><!-- Gallery's 2 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <figure class="ct-imageBox ct-imageBox--type4">
                                 <img class="media-object" src="web_assets/images/demo-content/offer-thumbnail-6.jpg" alt="Image" />
                                 <figcaption>
                                     <span>elegant approach to </span>
                                     <h2 class="ct-imageBox-title">Low Class </h2>
                                 </figcaption>
                             </figure>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry"><!-- Gallery's 3 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <figure class="ct-imageBox ct-imageBox--type4">
                                 <img class="media-object" src="web_assets/images/demo-content/offer-thumbnail-2.jpg" alt="Image" />
                                 <figcaption>
                                     <span>very tasty </span>
                                     <h2 class="ct-imageBox-title">Middle Class </h2>
                                 </figcaption>
                             </figure>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <section class="ct-u-paddingTop100 ct-u-paddingBottom70" data-background="#ffffff">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="ct-sectionHeader ct-sectionHeader--type1 text-center ct-u-marginBottom50">
                             <h3 class="ct-sectionHeader-title text-uppercase"> ROOM NOW </h3>
                         </div>
                         <ul class="list-unstyled list-inline ct-gallery-filters text-center ct-u-paddingTop30"><!-- Isotope nav -->
                             <li data-filter=".breakfast">All Room </li>
                             <li data-filter=".high_class">High Class rooms </li>
                             <li data-filter=".low_class">Low Class  rooms </li>
                             
                             <li data-filter=".middle_class">Middle Class Room</li>
                         </ul>
                         <div class="ct-gallery ct-gallery--col3">
                            @foreach($userList as $key => $values)
                             <div class="ct-gallery-item ct-gallery-item--masonry {{$values->room_type}} breakfast"><!-- Gallery's 1 item -->
                                 <div class="ct-gallery-itemInner">
                                     <div class="ct-portfolio ct-portfolio--masonry">
                                         <div class="media ct-productBox ct-productBox--type1">
                                             <div class="media-left">

                                                 <img class="media-object" src="web_assets/images/images/single-bed-room-services.jpg" alt="Image" />
                                             </div>
                                             <div class="media-body">
                                                <a href="{{ route('bookingform',$values->id) }}">
                                                    
                                                 <h5 class="media-heading">{{$values->hname}}</h5>
                                                  
                                                 <p class="ct-productBox-description">- {{$values->room_name}} </p>
                                                 <span class="ct-productBox-price"> {{$values->per_price}}Rs. </span>
                                                 </a>
                                                 <p>
                                                 <a href="{{ route('bookingform',$values->id) }}">
                                                 <button>Add Booking</button>
                                                 </a>
                                             </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         @include('includes.footer')
     </div><!-- Page wrapper [end] -->
     <!-- JavaScripts -->
     <script src="{{ asset('web_assets/js/external.min.js')}}"></script>

     <!-- Main js file -->
     <script src="{{ asset('web_assets/js/main.js')}}"></script>

     <!-- Slick -->
     <script src="{{ asset('web_assets/js/slick/js/slick.js')}}"></script>
     <script src="{{ asset('web_assets/js/slick/js/init.js')}}"></script>

     <!-- Portfolio -->
     <script src="{{ asset('web_assets/js/portfolio/jquery.isotope.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/portfolio/imagesloaded.js')}}"></script>
     <script src="{{ asset('web_assets/js/portfolio/init.js')}}"></script>

     <!-- Magnific popup gallery -->
     <script src="{{ asset('web_assets/js/magnificpopup/magnificpopup.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/magnificpopup/init.js')}}"></script>

     <!-- Media Section -->
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/smoothScroll.js')}}"></script>
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/jquery.stellar.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/media-section.js')}}"></script>

     <!--Topbar and Navbar effects-->
     <script src="{{ asset('web_assets/js/headroom/headroom.js')}}"></script>
     <script src="{{ asset('web_assets/js/headroom/jQuery.headroom.js')}}"></script>
     <script src="{{ asset('web_assets/js/headroom/init.js')}}"></script>




 <!-- switcher -->
 <script src="../demo/js/demo.js"></script>
 
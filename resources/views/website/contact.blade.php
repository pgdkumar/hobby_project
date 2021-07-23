@extends('layouts.weblayout')

@section('content')

@include('includes.header')

         <header class="ct-pageHeader ct-pageHeader-center ct-mediaSection" data-height="151" data-background="./web_assets/images/demo-content/header.jpg" data-background-mobile="./web_assets/images/demo-content/header.jpg">
             <div class="ct-mediaSection-inner">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12">
                             <div class="ct-sectionHeader ct-sectionHeader--type1">
                                 <h3 class="ct-sectionHeader-title text-uppercase"> Contact</h3>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </header>

         <section class="ct-u-paddingBoth100" data-background="#ffffff">
             <div class="container">
                 <div class="row">
                     <div class="col-md-5">

                         <h5 class="ct-u-colorGray ct-u-marginBottom50 ct-size-18">Here you can send __ a reservation request or _______ us via the form _____: </h5>
                         <form action="./web_assets/form/send.php" method="post" class="ct-u-paddingBottom30 contactForm validateIt contactForm--type2" data-hide-form="false" data-email-subject="Contact Form" data-show-errors="true">
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="successMessage alert alert-success ct-u-marginTop30" style="display: none">
                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">× </button>
                                        Thank You!
                                     </div>
                                     <div class="errorMessage alert alert-danger ct-u-marginTop30" style="display: none">
                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">× </button>
                                        Ups! An error occured. ______ try again later.
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <select name="field[]" class="ct-js-selectize">
                                             <option value="" />Enquiry 
                                             <option value="The Sydney Harbour" />The Sydney Harbour 
                                             <option value="Casa Caracol" />Casa Caracol 
                                             <option value="The Clayzy House" />The Clayzy House 
                                             <option value="RE B&amp;B" />RE B&amp;B 
                                             <option value="CamelBackpackers" />CamelBackpackers 
                                             <option value="Fauzi Azar Inn" />Fauzi Azar Inn 
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <select name="field[]" class="ct-js-selectize">
                                             <option value="" />Hostel 
                                             <option value="The Sydney Harbour" />The Sydney Harbour 
                                             <option value="Casa Caracol" />Casa Caracol 
                                             <option value="The Clayzy House" />The Clayzy House 
                                             <option value="RE B&amp;B" />RE B&amp;B 
                                             <option value="CamelBackpackers" />CamelBackpackers 
                                             <option value="Fauzi Azar Inn" />Fauzi Azar Inn 
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <label for="email" class="sr-only">Your email </label>
                                         <input type="email" id="email" class="form-control input-lg" name="field[]" placeholder="Your email" required/="" />
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <label for="name" class="sr-only">Your name </label>
                                         <input type="text" id="name" class="form-control input-lg" name="field[]" placeholder="Your name" required/="" />
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <label for="subject" class="sr-only">Subject </label>
                                         <input type="text" id="subject" class="form-control input-lg" name="field[]" placeholder="Subject" required/="" />
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <textarea class="form-control" rows="5" name="field[]" placeholder="Your message" required=""></textarea>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <select required="" class="ct-js-selectize" name="field[]">
                                             <option value="" />How did you hear _____ us? 
                                             <option value="The Sydney Harbour" />The Sydney Harbour 
                                             <option value="Casa Caracol" />Casa Caracol 
                                             <option value="The Clayzy House" />The Clayzy House 
                                             <option value="RE B&amp;B" />RE B&amp;B 
                                             <option value="CamelBackpackers" />CamelBackpackers 
                                             <option value="Fauzi Azar Inn" />Fauzi Azar Inn 
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="checkbox ct-u-marginTop10">
                                         <input type="checkbox" id="checkbox1" value="Yes" name="field[]" />
                                         <label for="checkbox1">subscribe to our newsletter </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="btn-group">
                                         <button type="submit" class="btn btn-primary ct-u-marginTop20"><strong>Send </strong> now <span><i class="icon-right-small"></i></span></button>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <div class="col-md-7 text-right text-center--sm">
                         <img src="web_assets/images/demo-content/receptionist.jpg" alt="Image" />
                     </div>
                 </div>
             </div>
             <div class="container">
                 <div class="row">
                     <div class="col-md-6 col-sm-12">
                         <div class="ct-puzzleBox ct-puzzleBox--type2">
                             <img src="web_assets/images/demo-content/image-4.jpg" alt="Image" class="animated" data-fx="fadeInDown" />
                             <img src="web_assets/images/demo-content/image-5.jpg" alt="Image" class="animated" data-fx="fadeInRight" data-time="1000" />
                             <img src="web_assets/images/demo-content/image-6.jpg" alt="Image" class="animated" data-fx="fadeInLeft" data-time="1000" />
                             <img src="web_assets/images/demo-content/image-7.jpg" alt="Image" class="animated" data-fx="fadeInUp" />
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-12">
                         <h5 class="ct-u-colorGray ct-u-paddingTop80"><small>Give us a call __ come visit us in ___ beautiful hostel </small></h5>
                         <div class="ct-address ct-u-paddingTop25">
                             <div class="media">
                                 <div class="media-left">
                                     <i class="icons8-map-marker"></i>
                                 </div>
                                 <div class="media-body media-top">
                                    Youth Hostel Worldwide  <br />
                                    26 Wade Lane  <br />
                                    SALKELD DYKES, CA11 5__  <br />
                                 </div>
                             </div>
                             <div class="media ct-u-paddingTop20">
                                 <div class="media-left">
                                     <i class="fa fa-phone"></i>
                                 </div>
                                 <div class="media-body media-top">
                                    Phone:  <a href="tel:(012) 345-6789">(012) 345-6789 </a>  <br />
                                 </div>
                             </div>
                             <div class="media">
                                 <div class="media-left">
                                     <i class="fa fa-envelope-o"></i>
                                 </div>
                                 <div class="media-body media-top">
                                    Email:  <a href="mailto:youthhostel@contact.com">youthhostel@contact.com </a>  <br />
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
@include('includes.footer')
     
 </div><!-- Page Wrapper [end] -->


     <!-- JavaScripts -->
     <script src="{{ asset('web_assets/js/external.min.js')}}"></script>

     <!-- Main js file -->
     <script src="{{ asset('web_assets/js/main.js')}}"></script>

     <!-- Slick -->
     <script src="{{ asset('web_assets/js/slick/js/slick.js')}}"></script>
     <script src="{{ asset('web_assets/js/slick/js/init.js')}}"></script>

     <!-- Media Section -->
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/smoothScroll.js')}}"></script>
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/jquery.stellar.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/media-section.js')}}"></script>

     <!-- Selectize -->
     <script src="{{ asset('web_assets/js/selectize/selectize.min.js')}}"></script>

     <!--Topbar and Navbar effects-->
     <script src="{{ asset('web_assets/js/headroom/headroom.js')}}"></script>
     <script src="{{ asset('web_assets/js/headroom/jQuery.headroom.js')}}"></script>
     <script src="{{ asset('web_assetsassets/js/headroom/init.js')}}"></script>

     <script src="{{ asset('web_assets/form/js/contact-form.js')}}"></script>



 <!-- switcher -->
 <script src="../demo/js/demo.js"></script>

 $endsection
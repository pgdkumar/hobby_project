@extends('layouts.weblayout')

@section('content')

@include('includes.header')

       <header class="ct-pageHeader ct-pageHeader-center ct-mediaSection" data-height="151" data-background="./web_assets/images/demo-content/header.jpg" data-background-mobile="./web_assets/images/demo-content/header.jpg">
             <div class="ct-mediaSection-inner">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12">
                             <div class="ct-sectionHeader ct-sectionHeader--type1">
                                 <h3 class="ct-sectionHeader-title text-uppercase"> BOOKING</h3>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </header>

         <section class="ct-u-paddingTop70">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6">
                         <h1 class="ct-u-size70 ct-fw-700 text-uppercase ct-u-colorDark ct-ff-openSans ct-u-paddingTop60">Take a Small <small class="ct-u-size48 ct-fw-300 ct-u-colorDark ct-ff-openSans text-lowercase">tour right away! </small></h1>
                         <p class="lead ct-u-colorDark ct-u-paddingTop40 ct-u-paddingBottom50">See our latest video __ our hostel. Lorem ipsum _____ sit amet, cons ectetur __________ elit. Quisque accumsan a ______ et ornare. Pelleni tesque ___ magna et ipsum. </p>
                         <a href="https://www.youtube.com/watch?v=rYbtBXhMFAQ" class="btn btn-primary ct-u-marginBottom30 ct-js-videoPlay"><strong>Learn </strong> more <span><i class="icon-right-small"></i></span></a>
                     </div>
                     <div class="col-md-6">
                         <div class="ct-videoPoster text-right animated" data-fx="fadeInRight">
                             <div class="ct-videoPoster-content">
                                 <img src="web_assets/images/demo-content/video-frame.png" alt="Image" />
                                 <div class="ct-videoPoster-frame">
                                     <img src="web_assets/images/demo-content/video-poster.jpg" alt="Image" />
                                     <a href="https://www.youtube.com/watch?v=rYbtBXhMFAQ" class="ct-js-videoPlay"><img src="assets/images/demo-content/video-play.png" alt="Image" /></a>
                                 </div>
                             </div>
                             <div class="ct-videoPoster--mobile ct-u-paddingBottom70 ct-u-paddingTop20">
                                 <div class="ct-videoPoster-frame">
                                     <img src="web_assets/images/demo-content/video-poster.jpg" alt="Image" />
                                     <a href="https://www.youtube.com/watch?v=rYbtBXhMFAQ" class="ct-js-videoPlay"><img src="web_assets/images/demo-content/video-play.png" alt="Image" /></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         
         <section class="ct-u-paddingTop90 ct-u-paddingBottom100" data-background="#ffffff">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="ct-sectionHeader text-center">
                             <h3 class="ct-sectionHeader-title text-uppercase">Room Booking </h3>
                         </div>
                         <span class="ct-hr ct-hr--type1 ct-u-marginTop20 ct-u-marginBottom50" data-background="#f7f7f7">Line break </span>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <form action="{{route('bookingsave')}}" method="POST" class="contactForm validateIt contactForm--type2" data-hide-form="false" data-email-subject="Inquiry form" data-show-errors="true">
                              @csrf
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="successMessage alert alert-success ct-u-marginTop30" style="display: none">
                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">× </button>
                                        Thank You!
                                     </div>
                                     <div class="errorMessage alert alert-danger ct-u-marginTop30" style="display: none">
                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">× </button>
                                        Ups! An error occured. ______ try again later
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <div class="ct-datePicker">
                                           
                                            <select class="demo-default ct-js-selectize" name="hotel_name">
                                                 <option value="">Hotel Name</option>
                                                @foreach($hotels as $key => $values)
                                                 @if($userList != "")
                                                <option value="{{$values->id}}" @if($userList->id == $values->id) selected @endif >{{$values->hname}}</option>
                                                @else
                                                <option value="{{$values->id}}" >{{$values->hname}}</option>
                                                @endif
                                                @endforeach
                                             </select>
                                             
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                        <input type="text" name="room_name" class="form-control " value="@if($userList != "") {{$userList->room_name}} @endif" name="room_name" placeholder="Room Name" required=""  />
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <div class="ct-datePicker">
                                             <input type="text" class="form-control ct-js-datePicker" name="from_date" placeholder="Arrival Date (dd/mm/yyyy)" required="" data-autoclose="true" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <div class="ct-datePicker">
                                             <input type="text" class="form-control ct-js-datePicker" name="to_date" placeholder="Departure Date (dd/mm/yyyy)" required="" data-autoclose="true" />
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Contact Person" name="contact_person" required="" value="{{Auth::user()->first_name}} {{Auth::user()->last_name}} " />
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <select class="demo-default ct-js-selectize" name="no_of_guest">
                                             <option value="" />Number Of Guests 
                                             <option value="1" />1 
                                             <option value="2" />2 
                                             <option value="3" />3 
                                             <option value="4" />4 
                                             <option value="5" />5 
                                             <option value="6" />6 
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <select class="demo-default ct-js-selectize" name="room_type">
                                             <option value="" />Room Type 
                                             <option value="high_class" />High Class
                                             <option value="low_class" />Low Class
                                             <option value="middle_class" />Middle Class
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <select class="demo-default ct-js-selectize" name="age">
                                             <option value="" />Age Of Participants 
                                             <option value="1" />1 - 10 
                                             <option value="2" />11 - 20 
                                             <option value="3" />21 - 30 
                                             <option value="4" />31 - 40 
                                             <option value="5" />41 - 50 
                                              <option value="6" />51 - 60+ 
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-2">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-lg btn-block">Booking Now</button>
                                    </div>
                                 </div>

                             </div>
                             
                         </form>
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

     <!-- Magnific popup -->
     <script src="{{ asset('web_assets/js/magnificpopup/magnificpopup.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/magnificpopup/init.js')}}"></script>

     <!-- Selectize -->
     <script src="{{ asset('web_assets/js/selectize/selectize.min.js')}}"></script>

     <!-- Date time picker -->
     <script src="{{ asset('web_assets/js/datetime-picker/datetime-picker.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/datetime-picker/init.js')}}"></script>

     <!--Topbar and Navbar effects-->
     <script src="{{ asset('web_assets/js/headroom/headroom.js')}}"></script>
     <script src="{{ asset('web_assets/js/headroom/jQuery.headroom.js')}}"></script>
     <script src="{{ asset('web_assets/js/headroom/init.js')}}"></script>

     <!-- <script src="{{ asset('web_assets/form/js/contact-form.js')}}"></script> -->




 <!-- switcher -->
 <script src="../demo/js/demo.js"></script>
 @endsection
 
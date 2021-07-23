@extends('layouts.adminlayout')

@section('content')

@include('admin.includes.header')

             <!-- ============================================================== -->
             <!-- Start Page Content here -->
             <!-- ============================================================== -->

             <div class="content-page">
                 <div class="content">

                     <!-- Start Content-->
                     <div class="container-fluid">

                         <div class="row">

                             <div class="col-xl-3 col-md-6">
                                <a href="{{route('adminhotelList')}}">
                                 <div class="card-box">
                                     
                                     <h4 class="header-title mt-0 mb-4">Hotel </h4>

                                     <div class="widget-chart-1">
                                         <div class="widget-chart-box-1 float-left" dir="ltr">
                                             <input data-plugin="knob" data-width="80" data-height="80" data-fgcolor="#f05050 " data-bgcolor="#F9B9B9" value="58" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" />
                                         </div>

                                         <div class="widget-detail-1 text-right">
                                             <h2 class="font-weight-normal pt-2 mb-1"> 256  </h2>
                                             <p class="text-muted mb-1">Revenue today </p>
                                         </div>
                                     </div>
                                 </div>
                                 </a>
                             </div><!-- end col -->

                             <div class="col-xl-3 col-md-6">
                                <a href="{{route('adminuserlist')}}">
                                 <div class="card-box">
                                     
                                     <h4 class="header-title mt-0 mb-3">Users </h4>

                                     <div class="widget-box-2">
                                         <div class="widget-detail-2 text-right">
                                             <span class="badge badge-success badge-pill float-left mt-3">32%  <i class="mdi mdi-trending-up"></i>  </span>
                                             <h2 class="font-weight-normal mb-1"> 8451  </h2>
                                             <p class="text-muted mb-3">Revenue today </p>
                                         </div>
                                         <div class="progress progress-bar-alt-success progress-sm">
                                             <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                                 <span class="sr-only">77% Complete </span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                  </a>
                             </div><!-- end col -->

                             <div class="col-xl-3 col-md-6">
                                <a href="{{route('adminroomList')}}">
                                 <div class="card-box">

                                     <h4 class="header-title mt-0 mb-4">Rooms </h4>

                                     <div class="widget-chart-1">
                                         <div class="widget-chart-box-1 float-left" dir="ltr">
                                             <input data-plugin="knob" data-width="80" data-height="80" data-fgcolor="#ffbd4a" data-bgcolor="#FFE6BA" value="80" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" />
                                         </div>
                                         <div class="widget-detail-1 text-right">
                                             <h2 class="font-weight-normal pt-2 mb-1"> 4569  </h2>
                                             <p class="text-muted mb-1">Revenue today </p>
                                         </div>
                                     </div>
                                 </div>
                                 </a>
                             </div><!-- end col -->

                             <div class="col-xl-3 col-md-6">
                                <a href="#">
                                 <div class="card-box">

                                     <h4 class="header-title mt-0 mb-3">Booking </h4>

                                     <div class="widget-box-2">
                                         <div class="widget-detail-2 text-right">
                                             <span class="badge badge-pink badge-pill float-left mt-3">32%  <i class="mdi mdi-trending-up"></i>  </span>
                                             <h2 class="font-weight-normal mb-1"> 158  </h2>
                                             <p class="text-muted mb-3">Revenue today </p>
                                         </div>
                                         <div class="progress progress-bar-alt-pink progress-sm">
                                             <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                                 <span class="sr-only">77% Complete </span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 </a>
                             </div><!-- end col -->

                         </div>
                         <!-- end row -->

                         </div>
                         <!-- end row -->       
                        
                     </div>  <!-- container-fluid -->

                 </div>  <!-- content -->

                  @include('admin.includes.footer')

             </div>

             <!-- ============================================================== -->
             <!-- End Page content -->
             <!-- ============================================================== -->


         </div>
         <!-- END wrapper -->

         <!-- Vendor js -->
         <script src="{{ asset('admin_assets/js/vendor.min.js')}}"></script>

         <!-- knob plugin -->
         <script src="{{ asset('admin_assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

         <!--Morris Chart-->
         <script src="{{ asset('admin_assets/libs/morris-js/morris.min.js')}}"></script>
         <script src="{{ asset('admin_assets/libs/raphael/raphael.min.js')}}"></script>

         <!-- Dashboard init js-->
         <script src="{{ asset('admin_assets/js/pages/dashboard.init.js')}}"></script>

         <!-- App js -->
         <script src="{{ asset('admin_assets/js/app.min.js')}}"></script>

@endsection
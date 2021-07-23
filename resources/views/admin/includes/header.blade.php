<!-- Begin page -->
         <div id="wrapper">

             <!-- Topbar Start -->
             <div class="navbar-custom">
                 <ul class="list-unstyled topnav-menu float-right mb-0">


                     <li class="dropdown notification-list">
                         <a href="#" class="nav-link right-bar-toggle waves-effect">
                             <i class="fe-log-out"></i>
                         </a>
                     </li>
                 </ul>
                 <!-- LOGO -->
                 <div class="logo-box">
                     <a href="{{route ('adminDashboard')}}" class="logo logo-dark text-center">
                         <span class="logo-lg">
                             <img src="../admin_assets/images/logo-dark.png" alt="" height="16" />
                         </span>
                         <span class="logo-sm">
                             <img src="../admin_assets/images/logo-sm.png" alt="" height="24" />
                         </span>
                     </a>
                     <a href="{{route ('adminDashboard')}}" class="logo logo-light text-center">
                         <span class="logo-lg">
                             <img src="../admin_assets/images/logo-light.png" alt="" height="16" />
                         </span>
                         <span class="logo-sm">
                             <img src="../admin_assets/images/logo-sm.png" alt="" height="24" />
                         </span>
                     </a>
                 </div>

                 <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                     <li>
                         <button class="button-menu-mobile disable-btn waves-effect">
                             <i class="fe-menu"></i>
                         </button>
                     </li>

                     <li>
                         <h4 class="page-title-main">ADMIN Dashboard </h4>
                     </li>
        
                 </ul>

             </div>
             <!-- end Topbar -->

             <!-- ========== Left Sidebar Start ========== -->
             <div class="left-side-menu">

                 <div class="slimscroll-menu">

                     
                     <!--- Sidemenu -->
                     <div id="sidebar-menu">

                         <ul class="metismenu" id="side-menu">

                             <li class="menu-title">admin </li>
                             <li>
                                 <a href="{{route ('adminDashboard')}}">
                                     <i class="mdi mdi-page-layout-sidebar-left"></i>
                                     <span>Dashboard</span>
                                  
                                 </a>
                             </li>

                             <li>
                                 <a href="#">
                                     <i class="mdi mdi-page-layout-sidebar-left"></i>
                                     <span> Hotel  </span>
                                     <span class="menu-arrow"></span>
                                 </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                     <li><a href="{{route ('adminhotelAdd') }}">Add Hotel</a></li>
                                     <li><a href="{{route('adminhotelList')}}">List Hotel </a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="#">
                                     <i class="mdi mdi-page-layout-sidebar-left"></i>
                                     <span> User  </span>
                                     <span class="menu-arrow"></span>
                                 </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                     <li><a href="{{route('adminuserAdd')}}">Add User </a></li>
                                     <li><a href="{{route('adminuserlist')}}">List User   </a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="#">
                                     <i class="mdi mdi-page-layout-sidebar-left"></i>
                                     <span> Room </span>
                                     <span class="menu-arrow"></span>
                                 </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                     <li><a href="{{route('adminroomAdd')}}">Add Room</a></li>
                                     <li><a href="{{route('adminroomList')}}">List Room</a></li>
                                 </ul>
                             </li>
                              <li>
                                 <a href="#">
                                     <i class="mdi mdi-page-layout-sidebar-left"></i>
                                     <span> Reporting </span>
                                     <span class="menu-arrow"></span>
                                 </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                     <li><a href="{{route('adminreportingHotel')}}">Hotel Reporting</a></li>
                                     <li><a href="{{route('adminreportingUser')}}">User Reporting  </a></li>
                                     <li><a href="{{route('adminreportingRoom')}}">Room Reporting  </a></li>
                                     <li><a href="{{route('adminreportingBooking')}}">Booking Reporting  </a></li>
                                 </ul>
                             </li>

                         </ul>

                     </div>
                     <!-- End Sidebar -->

                     <div class="clearfix"></div>

                 </div>
                 <!-- Sidebar -left -->

             </div>
             <!-- Left Sidebar End -->
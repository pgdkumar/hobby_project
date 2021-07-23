<!-- Preloader -->
     <div id="preloader">
         <span class="loader" data-loading-text="LOADING"></span>
     </div>
     <div class="ct-menuMobile">
         <ul class="ct-menuMobile-navbar">
             <li class="dropdown">
                 <a href="{{ route('home') }}">Home <i class="fa fa-angle-right"></i></a>
             </li>

             <li class="dropdown">
                 <a href="{{ route('about') }}">About </a>
             </li>

             <li class="dropdown">
                 <a href="{{ route('guest_room') }}">Guest rooms </a>
             </li>
             
             <li class="dropdown">
                 <a href="{{ route('booking') }}">Booking </a>
             </li>
             
             <li>
                <a href="#">Contact </a>
             </li>

             <li role="menuitem" class="dropdown active">
                 <a href="#">Action </a>
              <ul role="menu" class="dropdown-menu">
                <li ><a href="{{ route('register')}}">Registration</a></li>
                <li><a href="{{ route('login')}}">Login </a></li>
              </ul>
            </li>
         </ul>
     </div>

 <div id="ct-js-wrapper" class="ct-pageWrapper">
     <div class="ct-navbarMobile ct-navbarMobile--inverse">
         <a class="navbar-brand" href="{{ route('home') }}">
             <figure>
                 <img src="web_assets/images/demo-content/logo-1.png" alt="Logo" />
                 <figcaption>
                     <h2 class="navbar-brand-name">Youth  <span class="ct-u-colorMotive ct-fw-400">Hostel </span></h2>
                     <span class="navbar-brand-description">Our hostels worldwide </span>
                 </figcaption>
             </figure>
         </a>
         <button type="button" class="navbar-toggle">
             <span class="sr-only">Toggle navigation </span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
     </div>

     
     <!-- Desktop navbar -->
     <nav class="navbar navbar-default ct-u-paddingBoth35" data-background="#ffffff" data-startnavbar="36">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="collapse navbar-collapse">
                         <div class="navbar-header">
                             <a class="navbar-brand" href="{{ route('home') }}">
                                 <figure>
                                     <img src="web_assets/images/demo-content/logo-1.png" alt="Logo" />
                                     <figcaption>
                                         <h2 class="navbar-brand-name">Youth  <span class="ct-u-colorMotive ct-fw-400">Hostel </span></h2>
                                         <span class="navbar-brand-description">Our hostels worldwide </span>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                         <ul class="nav navbar-nav navbar-right ct-navbar--fadeIn" role="menu">
                             <li role="menuitem" >
                                 <a href="{{ route('home') }}">Home </a>
                                 
                             </li>
                             <li role="menuitem" class="dropdown">
                                 <a href="{{ route('about') }}">About </a>
                             </li>

                             <li class="dropdown">
                                  <a href="{{ route('guest_room') }}">Guest rooms </a>
                             </li>
                            
                             <li role="menuitem" class="dropdown">
                                 <a href="{{ route('booking') }}">Booking </a>
                             </li>
                             
                             <li role="menuitem">
                                 <a href="{{ route('contact')}}">Contact </a>
                             </li>

                             <li role="menuitem" class="dropdown active">
                                     <a href="#">Action </a>
                                     <ul role="menu" class="dropdown-menu">
                                        @if(Auth::user())
                                         <li><a href="{{ route('logout')}}">Logout </a></li>
                                        @else
                                         <li ><a href="{{ route('register')}}">Registration</a></li>
                                         <li><a href="{{ route('login')}}">Login </a></li>
                                        @endif
                                     </ul>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </nav>
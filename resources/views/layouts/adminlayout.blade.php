<!DOCTYPE html>
 <html lang="en">
     <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta charset="utf-8" />
         <title>Dashboard | Youth Hostel</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
         <meta content="Coderthemes" name="author" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <!-- App favicon -->
         <link rel="shortcut icon" href="{{ asset('admin_assets/images/favicon.ico')}}" />

         <!-- Bootstrap Css -->
         <link href="{{ asset('admin_assets/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
         <!-- Icons Css -->
         <link href="{{ asset('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- App Css-->
         <link href="{{ asset('admin_assets/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

     </head>

     <body>
         @yield('content')
         </body>
 </html>
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
                             <div class="col-12">
                                 <div class="card">
                                     <div class="card-body">
                                         <h4 class="mt-0 header-title">User List </h4>
                                         <div class="table-responsive">
                                             <table class="table table-centered mb-0" id="btn-editable">
                                                 <thead>
                                                     <tr>
                                                          <th>id</th>
                                                         <th>Hotel Name </th>
                                                         <th>Hotel Contact </th>
                                                         <th>first_name </th>
                                                         <th>email   </th>
                                                         <th>Destripition </th>
                                                         <th>Action </th>
                                                     </tr>
                                                 </thead>
                                            
                                                @foreach($userList as $key => $values)
                                                
                                                 <tbody>
                                                     <tr>
                                                         <td>{{ ++$key }} </td>
                                                         <td>{{ $values->hotel_name }}</td>
                                                         <td>{{ $values->hotel_contact}} </td>
                                                         <td>{{ $values->first_name}}</td>
                                                         <td>{{ $values->email}}</td>
                                                         <td>{{ $values->destripition}} </td>
                                                         <td>
                                                            <a href="{{ route('adminuserEdit',[$values->id])}}">Edit</a>
                                                            <a href="{{ route('adminuserdelete',[$values->id])}}">Delete</a>
                                                         </td>
                                                     </tr>  
                                                 </tbody>
                                                @endforeach
                                             </table>
                                         </div>  <!-- end .table-responsive-->
                                     </div>  <!-- end card-body -->
                                 </div>  <!-- end card -->
                             </div>  <!-- end col -->
                         </div>  <!-- end row -->
                        
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

         <!-- Table Editable plugin-->
         <script src="{{ asset('admin_assets/libs/jquery-tabledit/jquery.tabledit.min.js')}}"></script>

         <!-- Table editable init-->
         <script src="{{ asset('admin_assets/js/pages/tabledit.init.js')}}"></script>

         <!-- App js -->
         <script src="{{ asset('admin_assets/js/app.min.js')}}"></script>
        

@endsection
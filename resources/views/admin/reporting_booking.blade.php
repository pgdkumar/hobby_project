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
                                         <h4 class="mt-0 header-title">Reporting List </h4>
                                         <div class="table-responsive">
                                             <table class="table table-centered mb-0" id="btn-editable">
                                                 <thead>
                                                     <tr>
                                                          <th>S.No</th>
                                                         <th>Hotel Name </th>
                                                         <th>Room Name </th>
                                                         <th>From Date </th>
                                                         <th>To Date </th>
                                                         <th>contact_person </th>
                                                         <th>Number of guest </th>
                                                         <th>Room Type </th>
                                                          <th>Age of Participants </th>      
                                                     </tr>
                                                 </thead>
                                                 @foreach($userList as $key => $values)
                                                 <tbody>
                                                     <tr>
                                                         <td>{{ ++$key }} </td>
                                                         <td>{{ $values->hname }}</td>
                                                         <td>{{ $values->room_name}} </td>
                                                         <td>{{ $values->from_date}} </td>
                                                         <td>{{ $values->to_date}} </td>
                                                         <td>{{ $values->contact_person}} </td>
                                                         <td>{{ $values->no_of_guest}}</td>
                                                         <td>{{ $values->room_type}}</td>
                                                         <td>{{ $values->age}}</td> 
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

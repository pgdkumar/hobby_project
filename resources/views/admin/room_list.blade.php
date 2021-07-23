@extends('layouts.adminlayout')

@section('content')

@include('admin.includes.header')

<!-- Left Sidebar End -->
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
                                         <h4 class="mt-0 header-title">Room List </h4>
                                         <div class="table-responsive">
                                             <table class="table table-centered mb-0" id="btn-editable">
                                                 <thead>
                                                     <tr>
                                                         <th>S.No</th>
                                                         <th>Hotel Name</th>
                                                         <th>Room Name</th>
                                                         <th>Room N0 </th>
                                                         <th>Room Type</th>
                                                         <th>Count Person</th>
                                                         <th>per Price</th>
                                                         <th>Status</th>
                                                         <th>Destripition </th>
                                                         <th>Action </th>
                                                     </tr>
                                                 </thead>
                                               @foreach($userList as $key => $values)
                                                
                                                 <tbody>
                                                     <tr>
                                                         <td>{{ ++$key }} </td>
                                                         <td>{{ $values->hname }}</td>
                                                         <td>{{ $values->room_name}} </td>
                                                         <td>{{ $values->room_no}}</td>
                                                         <td>{{ $values->room_type}}</td>
                                                         <td>{{ $values->count_person}}</td>
                                                         <td>{{ $values->per_price}}</td>
                                                         <td>{{ $values->status}}</td>
                                                         <td>{{ $values->destripition}} </td>
                                                        <td>
                                                            <a href="{{ route('adminroomEdit',[$values->id])}}">Edit</a>
                                                            <a href="{{ route('adminroomdelete',[$values->id])}}">Delete</a>
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
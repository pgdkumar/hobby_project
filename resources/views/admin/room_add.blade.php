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
                         <!-- Form row -->
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="card-box">
                                     <h4 class="m-t-0 header-title">Room Add </h4>
                                     
                                     <form action="{{route('adminroomsave')}}" method="POST">
                                        @csrf
                                          <div class="form-group">
                                             <label for="inputAddress" class="col-form-label">Hotel Name</label>
                                            <select class="form-control" name="hotel_name"  placeholder="Hotel Name" >
                                                <option value="">Hotel Name</option>
                                                @foreach($hotels as $key => $values)
                                                <option value="{{$values->id}}">{{$values->hotel_name}}</option>
                                                @endforeach
                                            </select>
                                                 @error('hotel_name')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                 @enderror
                                         </div>
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">Room Name</label>
                                                 <input type="text" class="form-control" name="room_name"  placeholder="Room Name" />
                                                 @error('room_name')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                 @enderror
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">Room N0 </label>
                                                <input type="text" class="form-control" name="room_no"  placeholder="Room No" />
                                                 @error('room_no')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                 @enderror
                                             </div>
                                         </div>
                                          <div class="form-row">
                                             <div class="form-group col-md-6">
                                                <label class="col-form-label">Room Type</label>
                                                <select name="room_type" class="form-control">
                                                    <option>option</option>
                                                    <option value="high_class">high class</option>
                                                    <option value="low_class">low class</option>
                                                    <option value="middle_class">Middle class</option>
                                                  </select>

                                                 @error('room_type')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                 @enderror
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label  class="col-form-label">Count Person </label>
                                                <input type="text" class="form-control" name="count_person"  placeholder="Count Person" />
                                                 @error('count_person')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                 @enderror
                                             </div>
                                         </div>
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">per Price</label>
                                                 <input type="text" class="form-control" name="per_price"  placeholder="per Price" />
                                                 @error('per_price')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                 @enderror
                                             </div>
                                             <div class="form-group col-md-6">
                                                <label class="col-form-label">Status</label>
                                                <select name="status" class="form-control">
                                                    <option >options</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                  </select>

                                                 @error('room_name')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                 @enderror
                                             </div>
                                         </div>
                                         
                                         <div class="form-group">
                                             <label  class="col-form-label">Destripition </label>
                                             <textarea class="form-control"  name="destripition" rows="4" cols="50"></textarea>
                                         </div>
                                         
                                         <button type="submit" class="btn btn-primary">Sign in </button>
                                     </form>
                                 </div>
                             </div>
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

         <!-- App js -->
         <script src="{{ asset('admin_assets/js/app.min.js')}}"></script>

@endsection
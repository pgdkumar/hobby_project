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
                          <!-- Form row -->
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="card-box">
                                     <h4 class="m-t-0 header-title">User Add Room</h4>
                                     <form action="{{route('adminusersave')}}" method="POST" >
                                        @csrf

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">Hotel Name</label>
                                                 <input type="text" class="form-control" name="hotel_name"  placeholder="Hotel Name" />
                                                 @error('hotel_name')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                 @enderror
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label"> Hotel Contact </label>
                                                 <input type="text" class="form-control" name="hotel_contact" placeholder="Hotel Contact" />
                                                  @error('hotel_contact')
                                                        <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                         </div>
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">First Name</label>
                                                 <input type="text" class="form-control" name="first_name"  placeholder="First Name" />
                                                   @error('first_name')
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                   </span>
                                                   @enderror
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">Last Name </label>
                                                 <input type="text" class="form-control" name="last_name" placeholder="Last Name" />
                                                  @error('last_name')
                                                     <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                    </span>
                                                  @enderror
                                             </div>
                                         </div>
                                          <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">Email</label>
                                                 <input type="email" class="form-control" name="email"  placeholder="Email" />
                                                  @error('email')
                                                      <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label  class="col-form-label">Phone Number </label>
                                                 <input type="text" class="form-control" name="phone_number"  placeholder="Phone Number" />
                                                  @error('phone_number')
                                                      <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                         </div>
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">password</label>
                                                 <input type="password" class="form-control" name="password"  placeholder="password" />
                                                  @error('password')
                                                      <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label  class="col-form-label">Conform Password </label>
                                                 <input type="password" class="form-control" name="conform_password"  placeholder="conform Password" />
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="inputAddress" class="col-form-label">Address </label>
                                             <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" />
                                              @error('address')
                                                      <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                         </div>
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label class="col-form-label">Country</label>
                                                 <input type="text" class="form-control" name="country"  placeholder="Country" />
                                                  @error('country')
                                                      <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label  class="col-form-label">Pincode </label>
                                                 <input type="text" class="form-control" name="pincode"  placeholder="Pincode" />
                                                  @error('pincode')
                                                      <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label  class="col-form-label">Destripition </label>
                                             <textarea class="form-control"  name="destripition" rows="4" cols="50"></textarea>
                                              @error('destripition')
                                                      <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                       </span>
                                              @enderror
                                         </div>
                                         
                                         <button type="submit" class="btn btn-primary">Sign in </button>
                                     </form>
                                 </div>
                             </div>
                         </div>      
                        
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
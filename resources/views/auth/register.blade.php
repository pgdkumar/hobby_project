@extends('layouts.app')

@section('content')
<div class="signup-form">
    <form method="POST" action="{{ route('register') }}">
                        @csrf
        <h2>Register</h2>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    
                    <input id="hotel_name" type="text" class="form-control @error('hotel_name') is-invalid @enderror" name="hotel_name"  placeholder="Hotel Name" required autocomplete="hotel_name" autofocus>

                                @error('hotel_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col">
                     <input id="hotel_contact" type="text" class="form-control @error('hotel_contact') is-invalid @enderror" name="hotel_contact"  placeholder="Hotel contact" required autocomplete="hotel_contact" autofocus>

                                @error('hotel_contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>
            </div>          
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col">
                     <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>
            </div>          
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col">
                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>          
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col"><input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required"></div>
            </div>          
        </div>
        
         <div class="form-group">
            
            <input id="address" type="textarea" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="address" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" placeholder="Country" required autocomplete="country">

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>
                <div class="col">
                  
                    <input id="pincode" type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincode') }}" placeholder="pincode" required autocomplete="pincode">

                                @error('pincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>          
        </div>
        
        <div class="form-group">
            <textarea id="descripttion" class="form-control @error('descripttion') is-invalid @enderror"  name="descripttion" value="{{ old('descripttion') }}" rows="3" cols="52" placeholder="descripttion"  required autocomplete="descripttion"></textarea>

                                @error('descripttion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
         <input id="User" type="radio"  @error('User') is-invalid @enderror" name="User" value="User"  required autocomplete="User">
           <label for="html">User </label>
         <input id="User" type="radio"  @error('User') is-invalid @enderror" name="User" value="room owner"  required autocomplete="User">
                               @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

            <label >Room Owner</label>
                
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a href="{{route('login')}}">Sign in</a></div>
</div>
@endsection

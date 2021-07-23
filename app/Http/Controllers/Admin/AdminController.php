<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;

use Redirect;


use Log;
use Info;
use App\User;
use App\Rooms;
use App\Booking;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
    	return view('admin.dashboard');
    }

    public function hotelAdd(Request $request)
    {
    	return view('admin.hotel_add');
    }
    

    public function hotelSave(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $validation = Validator::make($data, [
            'hotel_name' => ['required', 'string', 'max:255'],
            'hotel_contact' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'max:10', 'min:10'],
            'password' => ['required', 'string', 'min:4', 'same:conform_password'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'pincode' => ['required', 'string', 'max:255'],
            'destripition' => ['required', 'string'],

        ]);

        if($validation->fails()){
            // dd($validation->errors());
            return Redirect::back()->withErrors([$validation->errors()->all()]);
        }
        else{
            $user = User::create([
                'hotel_name' => $data['hotel_name'],
                'hotel_contact' => $data['hotel_contact'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'password' => Hash::make($data['password']),
                'address' => $data['address'],
                'country' => $data['country'],
                'pincode' => $data['pincode'],
                'destripition' => $data['destripition'],
                'type' => 'hotal',
            ]);
        }

        return Redirect::to('admin/hotel/List');

    }
     
    public function hotelList(Request $request)
    {
        $user['userList'] = User::where('type','hotal')->get();
        // dd($user);
    	return view('admin.hotel_list',$user);
    }


     public function hotelEdit($id)
    {
        $user['user'] = User::where('id',$id)->first();
        // dd($user);

        return view('admin.hotel_edit',$user);
    }


    public function hoteldestroy($id)
    {
       User::where('id',$id)->delete();
       return redirect(route('adminhotelList'));
    }

    public function hotelUpdate(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $validation = Validator::make($data, [
            'hotel_name' => ['required', 'string', 'max:255'],
            'hotel_contact' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:10', 'min:10'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'pincode' => ['required', 'string', 'max:255'],
            'destripition' => ['required', 'string'],

        ]);

        if($validation->fails()){
            // dd($validation->errors());
            return Redirect::back()->withErrors([$validation->errors()->all()]);
        }
        else{
            $user = User::where('id',$data['hotel_id'])->update([
                'hotel_name' => $data['hotel_name'],
                'hotel_contact' => $data['hotel_contact'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone_number' => $data['phone_number'],
                'address' => $data['address'],
                'country' => $data['country'],
                'pincode' => $data['pincode'],
                'destripition' => $data['destripition'],
                'type' => 'hotal',
            ]);
        }

        return Redirect::to('admin/hotel/List');

    }
 
    public function useradd(Request $request)
    {
    	return view('admin.user_add');
    }


    public function userSave(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $validation = Validator::make($data, [
            'hotel_name' => ['required', 'string', 'max:255'],
            'hotel_contact' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'max:10', 'min:10'],
            'password' => ['required', 'string', 'min:4', 'same:conform_password'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'pincode' => ['required', 'string', 'max:255'],
            'destripition' => ['required', 'string'],

        ]);

        if($validation->fails()){
            // dd($validation->errors());
            return Redirect::back()->withErrors([$validation->errors()->all()]);
        }
        else{
            $user = User::create([
                'hotel_name' => $data['hotel_name'],
                'hotel_contact' => $data['hotel_contact'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'password' => $data['password'],
                'address' => $data['address'],
                'country' => $data['country'],
                'pincode' => $data['pincode'],
                'destripition' => $data['destripition'],
                'type' => 'user',
            ]);
        }

        return Redirect::to('admin/user/List');
    }

     
     public function userList(Request $request)
    {
        $user['userList'] = User::where('type','user')->get();
        // dd($user);
        return view('admin.user_list',$user);
    }

    public function userEdit($id)
    {
        $user['user'] = User::where('id',$id)->first();
        // dd($user);

        return view('admin.user_edit',$user);
    }

      public function userdestroy($id)
    {
       User::where('id',$id)->delete();
       return redirect(route('adminuserlist'));
    }
     
     public function userUpdate(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $validation = Validator::make($data, [
            'hotel_name' => ['required', 'string', 'max:255'],
            'hotel_contact' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:10', 'min:10'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'pincode' => ['required', 'string', 'max:255'],
            'destripition' => ['required', 'string'],

        ]);

        if($validation->fails()){
            // dd($validation->errors());
            return Redirect::back()->withErrors([$validation->errors()->all()]);
        }
        else{
            $user = User::where('id',$data['hotel_id'])->update([
                'hotel_name' => $data['hotel_name'],
                'hotel_contact' => $data['hotel_contact'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone_number' => $data['phone_number'],
                'address' => $data['address'],
                'country' => $data['country'],
                'pincode' => $data['pincode'],
                'destripition' => $data['destripition'],
                'type' => 'user',
            ]);
        }

        return Redirect::to('admin/user/List');

    }

    public function roomAdd(Request $return)
    {
        $user['hotels'] = User::where('type','hotal')->get();
    	return view('admin.room_add',$user);
    }

    public function roomsave(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $validation = Validator::make($data, [
            'hotel_name' => ['required', 'string', 'max:255'],
            'room_name' => ['required', 'string', 'max:255'],
            'room_no' => ['required', 'string', 'max:255'],
            'room_type' => ['required', 'string', 'max:255'],
            'count_person' => ['required', 'string', 'max:255'],
            'per_price' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'destripition' => ['required', 'string'],

        ]);
        // dd($validation->errors());
        if($validation->fails()){
            // dd($validation->errors());
            return Redirect::back()->withErrors([$validation->errors()->all()]);
        }
        else{
            // dd(Rooms::get());
            $userroom = Rooms::create([
               
                'hotel_name' => $data['hotel_name'],
                'room_name' => $data['room_name'],
                'room_no' => $data['room_no'],
                'room_type' => $data['room_type'],
                'count_person' => $data['count_person'],
                'per_price' => $data['per_price'],
                'status' => $data['status'],
                'destripition' => $data['destripition'],
            ]);
        }

        return Redirect::to('admin/room/List');

    }

    public function roomList(Request $request)
    {
        $user['userList'] = Rooms::select('rooms.*','users.hotel_name as hname')->join('users','rooms.hotel_name','=','users.id')->get();
        // dd($user);
        return view('admin.room_list',$user);
    }
   
    public function roomEdit($id)
    {
        $user['user'] = Rooms::where('id',$id)->first();
        // dd($user);
        $user['hotels'] = User::where('type','hotal')->get();
        return view('admin.room_edit',$user);
    }


      public function roomdestroy($id)
    {
       Rooms::where('id',$id)->delete();
       return redirect(route('adminroomList'));
    }


    public function roomUpdate(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $validation = Validator::make($data, [
            'hotel_name' => ['required', 'string', 'max:255'],
            'room_name' => ['required', 'string', 'max:255'],
            'room_no' => ['required', 'string', 'max:255'],
            'room_type' => ['required', 'string', 'max:255'],
            'count_person' => ['required', 'string', 'max:255'],
            'per_price' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'destripition' => ['required', 'string'],

        ]);
        // dd($validation->errors());
        if($validation->fails()){
            // dd($validation->errors());
            return Redirect::back()->withErrors([$validation->errors()->all()]);
        }
        else{
            // dd(Rooms::get());
            $userroom = Rooms::where('id',$data['rooms_id'])->update([
               
                'hotel_name' => $data['hotel_name'],
                'room_name' => $data['room_name'],
                'room_no' => $data['room_no'],
                'room_type' => $data['room_type'],
                'count_person' => $data['count_person'],
                'per_price' => $data['per_price'],
                'status' => $data['status'],
                'destripition' => $data['destripition'],
            ]);
        }

        return Redirect::to('admin/room/List');

    }

     public function reportingHotel(Request $request)
    {
        $user['userList'] = User::where('type','hotal')->get();
        // dd($user);
        return view('admin.hotel_list',$user);
    }
 
     public function reportingUser(Request $request)
    {
        $user['userList'] = User::where('type','user')->get();
        // dd($user);
        return view('admin.user_list',$user);
    }

   public function reportingRoom(Request $request)
    {
        $user['userList'] = Rooms::select('rooms.*','users.hotel_name as hname')->join('users','rooms.hotel_name','=','users.id')->get();
        // dd($user);
        return view('admin.reporting_room',$user);
    }

     public function reportingBooking(Request $request)
    {
         $user['userList'] = Booking::select('bookings.*','users.hotel_name as hname')->join('rooms','bookings.hotel_name','=','rooms.id')->join('users','rooms.hotel_name','=','users.id')->get();
        // dd($user);
        return view('admin.reporting_booking',$user);
    }
}
        
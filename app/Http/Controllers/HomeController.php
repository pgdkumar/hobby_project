<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use Redirect;
use App\User;
use App\Rooms;
use App\Booking;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about(Request $request)
    {
        return view('website.aboutus');
    }
    public function guest_room(Request $request)
     {
         $user['userList'] = Rooms::select('rooms.*','users.hotel_name as hname')->join('users','rooms.hotel_name','=','users.id')->get();
        return view('website.guest_room',$user);
    }

    public function booking(Request $request)
    {
        $user['hotels'] = Rooms::select('rooms.*','users.hotel_name as hname')->join('users','rooms.hotel_name','=','users.id')->get();
        $user['userList'] = "";
        return view('website.booking',$user);
    }

    public function bookingsave(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $validation = Validator::make($data, [
            'hotel_name' => ['required', 'string', 'max:100',],
            'room_name' => ['required', 'string', 'max:100',],
            'from_date' => ['required', 'date'],
            'to_date' => ['required', 'date'],
            'contact_person' => ['required', 'string', 'max:100',],
            'no_of_guest' => ['required', 'max:2'],
            'room_type' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:100',],
         ]);
        // dd($validation->errors()->all());
        if($validation->fails()){
            // dd($validation->errors());
             return Redirect::back()->withErrors([$validation->errors()->all()]);
        }
        else{
            // dd(Booking::get());

            $user = Booking::create([
                'hotel_name' => $data['hotel_name'],
                'room_name' => $data['room_name'],
                'from_date' => date("Y-m-d",strtotime($data['from_date'])),
                'to_date' => date("Y-m-d",strtotime($data['to_date'])),
                'contact_person' => $data['contact_person'],
                'no_of_guest' => $data['no_of_guest'],
                'room_type' => $data['room_type'],
                'age' => $data['age'],
            ]);
        }

        return Redirect::to('/guest_room');

    }
    public function bookingform($id)
    {
        $user['userList'] = Rooms::select('rooms.*','users.hotel_name as hname')->join('users','rooms.hotel_name','=','users.id')->where('rooms.id',$id)->first();
        $user['hotels'] = Rooms::select('rooms.*','users.hotel_name as hname')->join('users','rooms.hotel_name','=','users.id')->get();
        return view('website.booking',$user);
    }
    public function contact(Request $request)
    {
        return view('website.contact');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->back();
    }

}

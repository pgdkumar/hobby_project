<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/guest_room', 'HomeController@guest_room')->name('guest_room');
Route::get('/booking', 'HomeController@booking')->name('booking');
Route::get('/booking/{id}', 'HomeController@bookingform')->name('bookingform');
Route::post('/booking/save','HomeController@bookingsave')->name('bookingsave');
Route::get('/contact', 'HomeController@contact')->name('contact');

 
Route::get('/admin/dashboard','Admin\AdminController@dashboard')->name('adminDashboard');


Route::get('/admin/hotel/add','Admin\AdminController@hotelAdd')->name('adminhotelAdd');
Route::post('/admin/hotel/save','Admin\AdminController@hotelsave')->name('adminhotelsave');
Route::post('/admin/hotel/Update','Admin\AdminController@hotelUpdate')->name('adminhotelupdate');
Route::get('/admin/hotel/List','Admin\AdminController@hotelList')->name('adminhotelList');
Route::get('/admin/hotel/edit/{id}','Admin\AdminController@hotelEdit')->name('adminHotelEdit');
Route::get('/admin/hotel/delete/{id}','Admin\AdminController@hoteldestroy')->name('delete');


Route::get('/admin/user/Add','Admin\AdminController@userAdd')->name('adminuserAdd');
Route::post('/admin/user/save','Admin\AdminController@usersave')->name('adminusersave');
Route::get('/admin/user/List','Admin\AdminController@userList')->name('adminuserlist');
Route::get('/admin/user/edit/{id}','Admin\AdminController@userEdit')->name('adminuserEdit');
Route::get('/admin/user/delete/{id}','Admin\AdminController@userdestroy')->name('adminuserdelete');
Route::post('/admin/user/Update','Admin\AdminController@userUpdate')->name('adminuserupdate');



Route::get('/admin/room/Add','Admin\AdminController@roomAdd')->name('adminroomAdd');
Route::post('/admin/room/save','Admin\AdminController@roomsave')->name('adminroomsave');
Route::post('/admin/room/Update','Admin\AdminController@roomUpdate')->name('adminroomupdate');
Route::get('/admin/room/List','Admin\AdminController@roomList')->name('adminroomList');
Route::get('/admin/room/edit/{id}','Admin\AdminController@roomEdit')->name('adminroomEdit');
Route::get('/admin/room/delete/{id}','Admin\AdminController@roomdestroy')->name('adminroomdelete');



Route::get('/admin/reporting/Hotel','Admin\AdminController@reportingHotel')->name('adminreportingHotel');
Route::get('/admin/reporting/User','Admin\AdminController@reportingUser')->name('adminreportingUser');
Route::get('/admin/reporting/Room','Admin\AdminController@reportingRoom')->name('adminreportingRoom');
Route::get('/admin/reporting/Booking','Admin\AdminController@reportingBooking')->name('adminreportingBooking');
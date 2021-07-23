<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $tabel = "bookings";
    protected $fillable = ['hotel_name','room_name', 'from_date','to_date','contact_person',  'no_of_guest','room_type','age'];
}

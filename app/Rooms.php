<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{

	protected $tabel = "rooms";
    protected $fillable = ['hotel_name','room_name','room_no','room_type','count_person','per_price','status', 'destripition'];
}

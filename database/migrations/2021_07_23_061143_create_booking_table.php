<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hotel_name')->nullable();
            $table->string('room_name')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('no_of_guest')->nullable();
            $table->string('room_type')->nullable();
            $table->integer('age')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruckbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truckbookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('truck_id');
            $table->integer('load_id');
            $table->string('status');
            $table->string('booking_type');
            $table->string('booking_date');
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
        Schema::dropIfExists('truckbookings');
    }
}

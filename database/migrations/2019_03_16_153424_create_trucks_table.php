<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('license_number');
            $table->string('truck_capacity');
            $table->string('vehicle_type');
            $table->string('price_km');
            $table->string('price_weight');
            $table->string('scheduled_dept');
            $table->string('from_suburb');
            $table->string('to_suburb');
            $table->string('truck_owner_id');
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
        Schema::dropIfExists('trucks');
    }
}

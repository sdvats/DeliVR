<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loads', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('pick_street');
            $table -> string('pick_suburb');
            $table -> string('pick_state');
            $table -> string('del_street');
            $table -> string('del_suburb');
            $table -> string('del_state');
            $table -> string('pick_date');
            $table -> string('service_type');
            $table -> string('load_type');
            $table -> string('load_dim');
            $table -> string('load_weight');
            $table -> string('load_owner_id');

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
        Schema::dropIfExists('loads');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepostatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depostates', function (Blueprint $table) {
            $table->increments('pos_merch');
            $table->integer('merch_id');
            $table->integer('depo_id');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depostates');
    }
}

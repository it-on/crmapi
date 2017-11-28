<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePozdoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pozdoks', function (Blueprint $table) {
            $table->increments('doc_id');
            $table->integer('merch');
            $table->integer('quantity_plus');
            $table->integer('quantity_minus');
            $table->integer('default_price');
            $table->integer('price_before_discount');
            $table->integer('percent_discount');
            $table->integer('price_after_discount');
            $table->integer('detal_price');
            $table->integer('depo_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pozdoks');
    }
}

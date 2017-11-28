<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->string('name');
            $table->text('full_name');
            $table->string('nip');
            $table->string('regon');
            $table->string('krs');
            $table->string('www');
            $table->string('email');
            $table->string('phone');
            $table->string('fax');
            $table->string('description');
            $table->string('notes');
            $table->string('tags');
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
        Schema::dropIfExists('clients');
    }
}

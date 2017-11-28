<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('doc_id');
            $table->integer('depo_id');
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));;
            $table->timestamp('add_date')->default(DB::raw('CURRENT_TIMESTAMP'));;
            $table->timestamp('pom_date')->default(DB::raw('CURRENT_TIMESTAMP'));;
            $table->integer('nr_doc');
            $table->integer('per_discount');
            $table->integer('netto');
            $table->integer('tax');
            $table->integer('netto_det');
            $table->integer('tax_det');
            $table->integer('netto_mag');
            $table->integer('tax_mag');
            $table->integer('together');
            $table->integer('to_pay');
            $table->timestamp('change')->default(DB::raw('CURRENT_TIMESTAMP'));;
            $table->integer('type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}

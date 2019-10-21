<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vetura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('km');
            $table->integer('year');
            $table->string('mileage');
            $table->string('transmisioni');
            $table->string('fuel');
            $table->string('seats');
            $table->integer('marka_id');
            $table->integer('modeli_id');
            $table->integer('salloni_id');
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
        Schema::dropIfExists('vetura');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalloniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salloni', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emri');
            $table->string('telefoni');
            $table->string('adresa');
            $table->string('slug')->unique();
            $table->string('facebook')->nullable();
            $table->string('metadescription')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('salloni');
    }
}

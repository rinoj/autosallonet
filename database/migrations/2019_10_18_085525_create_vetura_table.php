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
            $table->integer('cmimi');
            $table->integer('km');
            $table->integer('viti');
            $table->string('marshi');
            $table->string('lenda');
            $table->integer('kubikazha');
            $table->boolean('doganuar');
            $table->string('ngjyra');
            $table->string('interier');
            $table->integer('dyer');
            $table->longText('description')->nullable();

            $table->integer('marka_id');
            $table->integer('modeli_id');
            $table->integer('salloni_id');
            $table->boolean('rent')->default(false);
            $table->string('slug')->unique();
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

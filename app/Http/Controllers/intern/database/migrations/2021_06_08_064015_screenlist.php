<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Screenlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('screenlists', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('uuid');
            $table->string('name');
            $table->string('timestart');
            $table->string('timeend');
            $table->string('datestart');
            $table->string('dateend');
            $table->string('message');
            $table->unsignedBigInteger('background_id');
            $table->foreign('background_id')->references('id')->on('backgrounds');
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices');
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people');
            $table->unsignedBigInteger('visitor_id');
            $table->foreign('visitor_id')->references('id')->on('visitors');
            $table->string('generatedlink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('screenlists');
    }
}

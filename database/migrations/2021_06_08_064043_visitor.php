<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Visitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('visitors', function (Blueprint $visitor){
            $visitor->bigIncrements('id');
            $visitor->string('firstname');
            $visitor->string('lastname');
            $visitor->string('tel');
            $visitor->string('birthdate');
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
        Schema::dropIfExists('visitors');
    }
}

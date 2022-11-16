<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Person extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('people', function (Blueprint $person){
            $person->bigIncrements('id');
            $person->string('firstname');
            $person->string('lastname');
            $person->string('email');
            $person->string('tel');
            $person->string('department');
            $person->string('profile');
            $person->string('birthdate');
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
        Schema::dropIfExists('people');
    }
}

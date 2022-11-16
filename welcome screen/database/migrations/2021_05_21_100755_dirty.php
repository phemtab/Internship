<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dirty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dirties', function (Blueprint $dirty)
        {
            $dirty->id();
            $dirty->boolean('dirty')->default('0');
            $dirty->string('updated_at')->default('2020_2020_2020');
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
        Schema::dropIfExists('dirties');
    }
}

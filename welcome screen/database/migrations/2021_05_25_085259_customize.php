<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customs', function (Blueprint $custom)
        {
            $custom->id();
            $custom->timestamps();
            $custom->string('background')->default('https://player.vimeo.com/video/352253664?title=0&portrait=0&byline=0&autoplay=1');
            $custom->integer('second')->default('3000'); //for modal.
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
        Schema::dropIfExists('customs');
    }
}

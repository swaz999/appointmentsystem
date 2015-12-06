<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules',function (Blueprint $table){
          $table->increments('id');
          $table->string('available_days');
          $table->string('available_time');
          $table->string('location');
          $table->integer('faculty_id');
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
        Schema::drop('schedules');
    }
}

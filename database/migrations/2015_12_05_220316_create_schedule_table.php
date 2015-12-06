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
        Schema::create('schedule',function (Blueprint $table){
          $table->increments('id');
          // $table->Integer('faculty_id');
          // $table->foreign('faculty_id')->references('id')->on('schedule');
          $table->string('avaialable_days');
          $table->string('available_time');
          $table->string('location');
 $table->integer('faculty_id')->unsigned();
          $table->foreign('faculty_id')
      ->references('user_id')->on('users')
       $table->timestamps();
      ->onDelete('cascade');
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
    }
}

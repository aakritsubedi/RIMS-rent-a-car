<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('vehicles', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('license_plate_no');
      $table->string('type'); //SUV,Car,Jeep ...
      $table->integer('no_of_seats');
      $table->string('vehicle_conditions');
      $table->boolean('ac_status');
      $table->string('owner_name');
      $table->integer('photo_id');
      $table->float('hiring_cost');
      $table->text('description'); //description
      $table->tinyInteger('status')->default('1');
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
    Schema::drop('vehicles');
  }
}

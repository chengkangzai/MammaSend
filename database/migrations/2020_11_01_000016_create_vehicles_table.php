<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->text('car_plate')->nullable();
            $table->text('manufacturer')->nullable();
            $table->text('model')->nullable();
            $table->text('variant')->nullable();
            $table->text('color')->nullable();
            $table->text('body_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

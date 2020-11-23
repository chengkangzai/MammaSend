<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addRidersLicenceTable extends Migration
{
    public function up()
    {
        Schema::create('riders_licence', function (Blueprint $table) {
            $table->id();
            $table->text('class')->default("D")->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('IC_number')->nullable();
            $table->timestamps();
        });
    }
}

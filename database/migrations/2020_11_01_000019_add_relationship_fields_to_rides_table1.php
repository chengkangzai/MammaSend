<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addRelationshipFieldsToRidesTable1 extends Migration
{
    public function up()
    {
        Schema::table('rides', function (Blueprint $table) {
            $table->unsignedInteger('pickup_address_id')->nullable();
            $table->foreign('pickup_address_id', 'pickup_address_fk_2502418')->references('id')->on('addresses');
            $table->unsignedInteger('dropoff_address_id')->nullable();
            $table->foreign('dropoff_address_id', 'dropoff_address_fk_2502418')->references('id')->on('addresses');
        });
    }
}

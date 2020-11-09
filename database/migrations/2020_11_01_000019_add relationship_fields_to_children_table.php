<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addRelationshipFieldsToChildrenTable extends Migration
{
    public function up()
    {
        Schema::table('children', function (Blueprint $table) {
            $table->unsignedInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('users');
            $table->unsignedInteger('pickup_address_id')->nullable();
            $table->foreign('pickup_address_id', 'pickup_address_fk_2502417')->references('id')->on('addresses');
            $table->unsignedInteger('dropoff_address_id')->nullable();
            $table->foreign('dropoff_address_id', 'dropoff_address_fk_2502417')->references('id')->on('addresses');
        });
    }
}

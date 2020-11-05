<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('pickup_address_id')->nullable();
            $table->foreign('pickup_address_id', 'pickup_address_fk_2502417')->references('id')->on('addresses');
            $table->unsignedInteger('dropoff_address_id')->nullable();
            $table->foreign('dropoff_address_id', 'dropoff_address_fk_2502417')->references('id')->on('addresses');
        });
    }
}

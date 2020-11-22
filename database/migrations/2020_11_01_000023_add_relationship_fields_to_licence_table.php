<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addRelationshipFieldsToLicenceTable extends Migration
{
    public function up()
    {
        Schema::table('riders_licence', function (Blueprint $table) {
            $table->unsignedInteger('rider_id')->nullable();
            $table->foreign('rider_id')->references('id')->on('users');
        });
    }
}

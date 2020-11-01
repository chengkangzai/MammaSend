<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToRidesTable extends Migration
{
    public function up()
    {
        Schema::table('rides', function (Blueprint $table) {
            $table->unsignedInteger('rider_id');
            $table->foreign('rider_id', 'rider_fk_2502253')->references('id')->on('users');
        });
    }
}

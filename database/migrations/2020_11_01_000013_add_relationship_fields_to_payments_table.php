<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPaymentsTable extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_fk_2502547')->references('id')->on('users');
        });
    }
}

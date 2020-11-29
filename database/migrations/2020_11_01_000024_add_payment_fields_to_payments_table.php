<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentFieldsToPaymentsTable extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('total_received');
            $table->text('method')->nullable();
            $table->unsignedInteger('ride_id')->nullable();
            $table->foreign('ride_id')->references('id')->on('rides');
        });
    }

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('total_received', 15, 2);
            $table->decimal('rider_received', 15, 2);
            $table->decimal('office_received', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->text('full_name')->nullable();
            $table->text('IC_number')->nullable();
            $table->text('school_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

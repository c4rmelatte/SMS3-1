<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration  // MODIFIED BY ORTEGA 10:20 AM NOV 18 ***********************
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('roles', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('description');
        //     //$table->string('year_level')->nullable();//idk what year_level is this
        //     $table->unsignedBigInteger('department_id');
        //     $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');;
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('roles');
    }
};

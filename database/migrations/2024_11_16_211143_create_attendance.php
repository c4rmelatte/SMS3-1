<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // will modify by ORTEGA
    {
        // Schema::create('attendance', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedInteger('time_in');
        //     $table->unsignedInteger('time_out');

        //     $table->unsignedBigInteger('event_id');
        //     $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        //     $table->unsignedBigInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->unsignedBigInteger('employee_id');
        //     $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        // });

        // student class attendance checklist table

        // student event attendance checklist table

        // employee dtr table
        Schema::create('employee_dtr', function (Blueprint $table) {
            $table->text('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->text('month_year');
            $table->text('day');
            $table->text('time_in');
            $table->text('late');
            $table->text('time_out');
            $table->text('undertime');
            $table->text('overtime');
            $table->text('hours_worked');
        });

        // employee payroll table
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
};

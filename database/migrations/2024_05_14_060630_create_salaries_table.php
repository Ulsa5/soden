<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->float('amount',6,2);
            $table->float('incentivebonus',6,2);
            $table->float('positionbonus',6,2);
            $table->float('yearsalary',6,2);
            $table->unsignedBigInteger('salarytype_id');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('salarytype_id')->references('id')->on('salarytypes');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};

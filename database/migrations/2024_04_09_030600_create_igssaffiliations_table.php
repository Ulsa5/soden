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
        Schema::create('igssaffiliations', function (Blueprint $table) {
            $table->id();
            $table->integer('filial');
            $table->date('startdate');
            $table->date('enddate');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('enterprise_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('igssaffiliations');
    }
};

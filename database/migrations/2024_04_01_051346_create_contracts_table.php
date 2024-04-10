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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->date('startdate');
            $table->date('enddate');
            $table->string('contractdocument');
            $table->string('confidentiallitydocument');

            $table->unsignedBigInteger('enterprise_id');
            $table->unsignedBigInteger('employee_id');

            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};

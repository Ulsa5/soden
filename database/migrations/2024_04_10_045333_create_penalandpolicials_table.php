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
        Schema::create('penalandpolicials', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('number');
            $table->string('verificator');
            $table->date('extenddate');
            $table->date('expirationdate');
            $table->string('document');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penalandpolicials');
    }
};

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
        Schema::create('digesspcredentials', function (Blueprint $table) {
            $table->id();
            $table->string('nasp');
            $table->string('clasification');
            $table->date('extenddate');
            $table->date('expirationdate');
            $table->string('comments');
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
        Schema::dropIfExists('digesspcredentials');
    }
};

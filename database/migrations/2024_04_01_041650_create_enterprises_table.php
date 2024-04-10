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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nit');
            $table->string('address');
            $table->string('telephone');

            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('municipality_id');

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('municipality_id')->references('id')->on('municipalities');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enterprises');
    }
};

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
        Schema::create('ubications', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ubicationtype_id');

            $table->string('name');
            $table->string('address');
            $table->string('contactname');
            $table->string('contactemail');
            $table->string('contactphone');

            $table->unsignedBigInteger('employee_id');

            $table->foreign('ubicationtype_id')->references('id')->on('ubicationtypes');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubications');
    }
};

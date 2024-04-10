<?php

use App\Models\Municipality;
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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('address');

            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('municipality_id');
            $table->unsignedBigInteger('employee_id');

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->foreign('employee_id')->references('id')->on('employees');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};

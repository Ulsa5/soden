<?php

use App\Models\department;
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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('enterprise_id');

            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->date('birth');

            $table->unsignedBigInteger('bloodtype_id');

            $table->date('startdate');
            $table->date('enddate')->nullable();
            $table->string('nit');
            $table->string('irtra');

            $table->unsignedBigInteger('civilstatus_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('municipality_id');

            $table->string('igss');
            $table->string('telephone');

            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->foreign('bloodtype_id')->references('id')->on('bloodtypes');
            $table->foreign('civilstatus_id')->references('id')->on('civilstatuses');
            $table->foreign('position_id')->references('id')->on('positions');
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
        Schema::dropIfExists('employees');
    }
};

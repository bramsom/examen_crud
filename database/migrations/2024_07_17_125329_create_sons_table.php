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
        Schema::create('sons', function (Blueprint $table) {
            $table->id();
            $table->string('code_son'); //codigo del hijo
            $table->string('name'); //nombre del hijo
            $table->date('birthdate'); //fecha de nacimiento del hijo

            $table->unsignedBigInteger('employee_id')->nullable(); // indicador de referencia hacia la tabla empleados
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sons');
    }
};

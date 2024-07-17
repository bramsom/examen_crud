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
    {   // tabla muchos a muchos entre abilidades y empleados
        Schema::create('ability_employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->nullable(); //indicador de referencia hacia la tabla empleados (LLAVE FOREANEA)
            $table->unsignedBigInteger('ability_id')->nullable(); // indicador de referencia hacia la tabla habilidades (LLAVE FORANEA)

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('ability_id')->references('id')->on('abilities')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ability_employee');
    }
};

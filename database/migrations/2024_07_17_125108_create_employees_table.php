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
    {   // tabla de empleados
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('NIF'); //nif del empleado
            $table->integer('num_children'); //numero de hijos
            $table->integer('phone'); //telefono del empleado
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

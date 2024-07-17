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
    {   // tabla de departamentos
        Schema::create('departaments', function (Blueprint $table) {
            $table->id();
            $table->string('code_departament'); //codigo del departamento
            $table->string('name_departament'); // nombre del departamento
            $table->string('budget'); //presupuesto del departamento

            $table->unsignedBigInteger('center_id')->nullable(); // indicador de referencia hacia la tabla centros (llave foranea)
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departaments');
    }
};

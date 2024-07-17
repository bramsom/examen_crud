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
    {  //tabla de habilidades de los empleados
        Schema::create('abilities', function (Blueprint $table) {
            $table->id();
            $table->string('code_ability'); //codigo de la habilidad
            $table->string('description_ability'); //descripcion de la habilidad
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abilities');
    }
};

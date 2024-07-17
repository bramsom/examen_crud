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
    {  //tabla centro
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('code_center'); //codigo del centro 
            $table->string('name_center'); // nombre del centro
            $table->string('direction_center'); //direccion del centro
            $table->string('population'); //poblacion del centro
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centers');
    }
};

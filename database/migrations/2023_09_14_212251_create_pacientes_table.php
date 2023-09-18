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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_habitacion');
            $table->string('telefono_paciente');
            $table->string('telefono_contacto');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('tipo_sangre');
            $table->string('condicion')->nullable();
            $table->string('alergias')->nullable();
            $table->string('DNI')->unique();
            

            $table->foreign('id_habitacion')->references('id')->on('tipo_habitacions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};

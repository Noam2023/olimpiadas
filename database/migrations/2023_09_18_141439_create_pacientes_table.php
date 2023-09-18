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
            $table->unsignedBigInteger('habitacion_id');
            $table->string('nombre_paciente');
            $table->string('apellido_paciente');       
            $table->string('telefono_contacto', 15);
            $table->string('telefono_paciente', 15);
            $table->string('tipo_sangre', 5);
            $table->longText('padecimientos_previos')->nullable();
            $table->longText('alergias')->nullable();
            $table->string('DNI', 25)->unique();;
            $table->string('razon_ingreso');

            $table->foreign('habitacion_id')->references('id')->on('habitacions')->onDelete('cascade');
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

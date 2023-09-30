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
        Schema::create('llamado__empleados', function (Blueprint $table) {
            $table->unsignedBigInteger('llamado_id');
            $table->unsignedBigInteger('empleado_id');
            $table->datetime('hora_atendido');
            $table->integer('tiempo_respuesta');

            $table->foreign('llamado_id')->references('id')->on('llamados')->onDelete('cascade');
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');

             $table->primary(['llamado_id','empleado_id']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llamado__empleados');
    }
};

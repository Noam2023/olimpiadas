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
        Schema::create('llamados', function (Blueprint $table) {
            $table->id();
            $table->boolean('es_atendido')->default(false);
            $table->boolean('es_urgente');
            $table->unsignedBigInteger('habitacion_id');
            $table->unsignedBigInteger('zona_id');
            $table->timestamp('FechaHora_llamada')->useCurrent();     
            
            $table->unique(['habitacion_id', 'zona_id']);

            $table->foreign('habitacion_id')->references('id')->on('habitacions')->onDelete('cascade');
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('cascade');           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llamados');
    }
};

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
            $table->unsignedBigInteger('origen_id');
            $table->timestamp('FechaHora_llamada');
            
            $table->foreign('origen_id')->references('id')->on('punto_origen_llamadas')->onDelete('cascade');

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

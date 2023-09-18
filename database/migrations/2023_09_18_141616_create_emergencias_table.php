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
        Schema::create('emergencias', function (Blueprint $table) {
            $table->unsignedBigInteger('llamado_id')->primary();
            $table->integer('cantidad_empleados_involucrados');
            $table->integer('cantidad_empleados_requeridos');

            $table->foreign('llamado_id')->references('id')->on('llamados')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergencias');
    }
};

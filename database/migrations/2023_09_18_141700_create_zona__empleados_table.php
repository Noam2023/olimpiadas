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
        Schema::create('zona__empleados', function (Blueprint $table) {
            $table->unsignedBigInteger('zona_id')->primary();
            $table->unsignedBigInteger('empleado_id')->primary();

            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('cascade');
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zona__empleados');
    }
};

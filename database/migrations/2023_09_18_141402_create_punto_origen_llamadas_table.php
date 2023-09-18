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
        Schema::create('punto_origen_llamadas', function (Blueprint $table) {
            $table->id();
            $table->string('origen');
            $table->unsignedBigInteger('habitacion_id');

            $table->foreign('habitacion_id')->references('id')->on('habitacions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punto_origen_llamadas');
    }
};

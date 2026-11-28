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
        Schema::create('registro_familias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asistente_id')
                ->constrained('asistentes')
                ->onDelete('cascade');
            $table->date('fecha_registro');
            $table->string('apellido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_familias');
    }
};

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
        Schema::create('asistencia_liders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lider_id')
                ->constrained('liders')
                ->onDelete('cascade');
            $table->foreignId('pastor_id')
                ->constrained('pastors')
                ->onDelete('cascade');
            $table->foreignId('asistente_id')
                ->constrained('asistentes')
                ->onDelete('cascade');
            $table->string('asistencia');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia_liders');
    }
};

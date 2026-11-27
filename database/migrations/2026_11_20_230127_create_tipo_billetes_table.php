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
        Schema::create('tipo_billetes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aporte_id')
                ->constrained('aportes')
                ->onDelete('cascade');
            $table->foreignId('billete_id')
                ->constrained('billetes')
                ->onDelete('cascade');
            $table->integer('cantidad_billetes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */ 
    public function down(): void
    {
        Schema::dropIfExists('tipo_billetes');
    }
};

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
        Schema::create('utensilios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventario_id')
                ->constrained('inventarios')
                ->onDelete('cascade');
            $table->string('nombre');
            $table->string('categoria');
            $table->string('descripcion', 2000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utensilios');
    }
};

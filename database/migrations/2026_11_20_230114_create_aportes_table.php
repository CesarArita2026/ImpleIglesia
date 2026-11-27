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
        Schema::create('aportes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_recibido');
            $table->decimal('cantidad', 10, 2);
            $table->string('tipo_aporte');
            $table->foreignId('tesorero_id')
                ->constrained('tesoreros')
                ->onDelete('cascade');
            $table->foreignId('registro_familia_id')
                ->constrained('registro_familias')
                ->onDelete('cascade');
            $table->foreignId('estado_cuenta_id')
                ->constrained('estado_cuentas')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aportes');
    }
};

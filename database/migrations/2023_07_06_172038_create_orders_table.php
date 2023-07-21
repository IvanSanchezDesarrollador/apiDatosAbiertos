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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('departamento', 100)->nullable();
            $table->string('provincia', 100)->nullable();
            $table->string('distrito', 100)->nullable();
            $table->string('ubigeo', 100)->nullable();
            $table->bigInteger('periodo_anual')->nullable();
            $table->bigInteger('periodo_mensual')->nullable();
            $table->string('tipo_orden', 100)->nullable();
            $table->bigInteger('numero_orden')->nullable();
            $table->date('fecha_orden')->nullable();
            $table->bigInteger('ruc')->nullable();
            $table->string('razon_social', 250)->nullable();
            $table->string('fuente_financiamiento', 250)->nullable();
            $table->decimal('monto', 50, 2)->nullable();
            $table->date('fecha_corte')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

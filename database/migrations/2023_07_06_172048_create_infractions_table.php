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
        Schema::create('infractions', function (Blueprint $table) {
            $table->id();
            $table->string('departamento', 10)->nullable();
            $table->string('provincia', 10)->nullable();
            $table->string('distrito', 50)->nullable();
            $table->string('ubigeo', 6)->nullable();
            $table->bigInteger('codigo_infraccion')->nullable();
            $table->string('infraccion', 1500)->nullable();
            $table->date('fecha_infraccion')->nullable();
            $table->time('hora_infraccion')->nullable();
            $table->decimal('monto_infraccion', 15, 2)->nullable();
            $table->string('lugar_infraccion', 500)->nullable();
            $table->string('conductor_presente', 100)->nullable();
            $table->string('conductor_tenia_licencia', 100)->nullable();
            $table->string('conductor_categoria_licencia', 100)->nullable();
            $table->string('placa_vehiculo', 10)->nullable();
            $table->string('tipo_transporte', 50)->nullable();
            $table->string('tipo_servicio', 50)->nullable();
            $table->string('tuc_estado', 500)->nullable();
            $table->string('empresa', 500)->nullable();
            $table->string('internamiento_vehiculo', 10)->nullable();
            $table->date('fecha_internamiento')->nullable();
            $table->decimal('multa_internamineto', 50, 2)->nullable();
            $table->string('se_pago_multas', 10)->nullable();
            $table->date('fecha_pago_multas')->nullable();
            $table->date('fecha_desinternamiento')->nullable();
            $table->date('fecha_corte')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infractions');
    }
};

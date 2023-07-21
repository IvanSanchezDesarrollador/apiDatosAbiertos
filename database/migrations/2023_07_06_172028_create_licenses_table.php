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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('departamento', 10)->nullable();
            $table->string('provincia', 10)->nullable();
            $table->string('distrito', 50)->nullable();
            $table->string('ubigeo', 6)->nullable();
            $table->string('codigo_licencia', 10)->nullable();
            $table->string('ruc', 11)->nullable();
            $table->string('razon_social', 200)->nullable();
            $table->date('fecha_expedicion')->nullable();
            $table->date('fecha_cese')->nullable();
            $table->string('tipo_licencia', 10)->nullable();
            $table->string('estado_licencia', 20)->nullable();
            $table->string('nombre_local', 200)->nullable();
            $table->string('direccion_local', 200)->nullable();
            $table->string('nivel_riesgo', 20)->nullable();
            $table->text('giro')->nullable();
            $table->decimal('monto_tramite', 10, 2)->nullable();
            $table->date('fecha_corte')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};

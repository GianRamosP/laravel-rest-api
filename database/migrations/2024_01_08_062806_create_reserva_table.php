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
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id_reserva');
            $table->integer('id_usuario_comun')->unsigned()->nullable(false);
            $table->foreign('id_usuario_comun')->references('id_usuario_comun')->on('usuario_comun');
            $table->integer('id_habitacion')->unsigned()->nullable(false);
            $table->foreign('id_habitacion')->references('id_habitacion')->on('habitacion');
            $table->date('fecha_entrada')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->string('estado_reserva', 20)->nullable();
            $table->decimal('precio_reserva', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};

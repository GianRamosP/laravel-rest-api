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
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('id_manager');
            $table->integer('id_usuario_comun')->unsigned()->nullable(false);
            $table->foreign('id_usuario_comun')->references('id_usuario_comun')->on('usuario_comun');
            $table->integer('id_admin')->unsigned()->nullable(false);
            $table->foreign('id_admin')->references('id_admin')->on('admin');
            $table->string('nombre_hotel', 100)->nullable(false);
            $table->string('nombre_persona', 50)->nullable(false);
            $table->string('telefono', 20)->nullable(false);
            $table->date('fecha_renovacion')->nullable();
            $table->string('email', 100)->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};

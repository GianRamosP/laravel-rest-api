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
        Schema::create('habitacion', function (Blueprint $table) {
            $table->increments('id_habitacion');
            $table->integer('nro_habitacion')->nullable();
            $table->string('tipo', 50)->nullable();
            $table->decimal('precio', 10, 2)->nullable();
            $table->text('descripcion')->nullable();
            $table->tinyInteger('disponibilidad')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitacion');
    }
};

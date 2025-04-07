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
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->float('temperature');  // Campo para temperatura
            $table->float('humidity')->nullable();  // Campo opcional para humedad
            $table->string('device_id');  // Identificador del dispositivo (ESP32_Sensor)
            $table->timestamps();  // Fechas de creación/actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};

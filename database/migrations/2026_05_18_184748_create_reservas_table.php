<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('reservas', function (Blueprint $table) {
                $table->id();

                $table->foreignId('cliente_id')->constrained()->onDelete('cascade');

                $table->foreignId('habitacion_id')->constrained('habitacions')->onDelete('cascade');

                $table->date('fecha_entrada');

                $table->date('fecha_salida');

                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};

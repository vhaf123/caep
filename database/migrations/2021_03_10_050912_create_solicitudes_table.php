<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('imponente_id');
            $table->foreign('imponente_id')->references('id')->on('imponentes');

            $table->unsignedBigInteger('prestamo_id');
            $table->foreign('prestamo_id')->references('id')->on('prestamos');

            $table->integer('saldos');
            $table->dateTime('fecha_cierre');
            $table->decimal('monto_cuota', 12, 2);
            $table->integer('numero_cuotas');

            $table->unsignedBigInteger('cheque_id');
            $table->foreign('cheque_id')->references('id')->on('cheques');

            $table->unsignedBigInteger('bancario_id');
            $table->foreign('bancario_id')->references('id')->on('bancarios');

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
        Schema::dropIfExists('solicitudes');
    }
}

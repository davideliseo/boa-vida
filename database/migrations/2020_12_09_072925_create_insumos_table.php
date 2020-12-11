<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha_vencimiento');
            // TODO: confirmar si es necesario, o basta con los timestamps.
            $table->date('fecha_compra');
            $table->unsignedBigInteger('cantidad');
            $table->decimal('precio');
            $table->foreignId('abastecido_por');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insumos');
    }
}

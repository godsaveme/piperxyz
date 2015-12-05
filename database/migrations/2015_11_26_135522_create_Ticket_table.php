<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fechaPedido');
            $table->decimal('precioUnit',10,2);
            $table->decimal('precioUnitFinal',10,2);
            $table->decimal('cantidad',10,2);
            $table->decimal('montoFinal',10,2);
            $table->text('notas');
            $table->boolean('estado');
            $table->integer('detCash_id')->unsigned();
            $table->foreign('detCash_id')->references('id')->on('detCash');
            $table->integer('concepto_id')->unsigned();
            $table->foreign('concepto_id')->references('id')->on('concepto');
            $table->timestamps();
            $table->timestamp('fechaAnulado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('ticket');
    }
}

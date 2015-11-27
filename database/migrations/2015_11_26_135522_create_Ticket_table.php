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
            $table->dateTime('fechaPedido');
            $table->decimal('precioUnit',10,2);
            $table->decimal('precioUnitFinal',10,2);
            $table->decimal('cantidad',10,2);
            $table->decimal('montoFinal',10,2);

            $table->text('notas');

            $table->tinyInteger('estado');
            $table->timestamps();
            $table->dateTime('fechaAnulado');
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

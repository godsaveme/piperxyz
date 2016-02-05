<?php

use Illuminate\Database\Seeder;

class CashHeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cashHeaders')->insert([
            'nombre' => 'Caja Recepcion',
            'ambiente' => 'Recepcion',
            'estado' => 1,
            'descripcion' => 'Caja Recepcion creada por defecto.',
            'serieTicket' => 1,
            'numeroTicket' => 1,
            'seriePrinter' => 'seriePrinter',
            'msje' => 'LAS PIRKAS BUNGALOWS',
            'printerName' => 'epsont-tm-t88v',
            'store_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

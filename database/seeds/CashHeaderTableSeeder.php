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
            'nombre' => 'Caja Principal',
            'ambiente' => 'Principal',
            'estado' => 1,
            'descripcion' => 'Caja Principal creada por defecto.',
            'serieTicket' => 1,
            'numeroTicket' => 1,
            'seriePrinter' => 'seriePrinter',
            'msje' => 'Bienvenidos a las Pirkas',
            'store_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

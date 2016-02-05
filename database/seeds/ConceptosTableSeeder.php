<?php

use Illuminate\Database\Seeder;

class ConceptosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concepto')->insert([
            'nombre' => 'Piscina',
            'precioUnit' => 3,
            'descripcion' => 'Ingreso General',
            'mostrable' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('concepto')->insert([
            'nombre' => 'Paseo en bote',
            'precioUnit' => 5,
            'descripcion' => 'Paseo en bote',
            'mostrable' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('concepto')->insert([
            'nombre' => 'Paseo en Caballo',
            'precioUnit' => 5,
            'descripcion' => 'Camping',
            'mostrable' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('concepto')->insert([
            'nombre' => 'Eventos',
            'precioUnit' => 5,
            'descripcion' => 'Eventos',
            'mostrable' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

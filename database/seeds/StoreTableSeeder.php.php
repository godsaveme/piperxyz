<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stores')->insert([
            'nombreTienda' => 'Sucursal Principal',
            'razonSocial' => 'DIAZ CHINGAY EIRL',
            'ruc' => '20480659458',
            'direccion' => 'CAR.PANAMERICANA NORTE KM. 32.5(AL LADO DEL ESTADIO MUNICIPAL DE JAYANCA)',
            'distrito' => 'Jayanca',
            'provincia' => 'Lambayeque',
            'departamento' => 'Lambayeque',
            'pais' => 'Peru',
            'email' => 'laspirkas_eirl@hotmail.com',
            'web' => 'http://laspirkas.com.pe/',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

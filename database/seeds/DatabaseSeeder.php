<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(StoreTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CashMotivesTableSeeder::class);
        $this->call(CashHeaderTableSeeder::class);
        $this->call(CashTableSeeder::class);
        $this->call(ConceptosTableSeeder::class);
        Model::reguard();
    }
}

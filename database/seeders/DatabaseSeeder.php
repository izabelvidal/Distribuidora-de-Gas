<?php

use Database\Seeders\VendaSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(array(
            VendaSeeder::class,
        ));
    }
}

<?php

namespace Database\Seeders;

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
        $this->call(FederalEntitySeeder::class);
        $this->call(SettelementTypeSeeder::class);
        $this->call(ZipCodeSeeder::class);
    }
}

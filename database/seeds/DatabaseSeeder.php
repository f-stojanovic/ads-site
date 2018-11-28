<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the Application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AreaTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
    }
}

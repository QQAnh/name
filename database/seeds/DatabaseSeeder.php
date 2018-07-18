<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   $this->call([
        UserMemberTableSeeder::class,
        CategoryTableSeeder::class,
        ProductsTableSeeder::class,
        OrderDetailTableSeeder::class,
        OrderTableSeeder::class
    ]);
    }
}

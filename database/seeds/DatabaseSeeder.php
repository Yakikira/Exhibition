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
    {
        $this->call([
            UsersTableSeeder::class,
            Company_userTableSeeder::class,
            ExhibitionTableSeeder::class,
            BoothsTableSeeder::class,
            CompaniesTableSeeder::class,
            ItemsTableSeeder::class,
            ]);
    }
}

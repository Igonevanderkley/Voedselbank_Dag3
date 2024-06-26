<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(GezinSeeder::class);
        $this->call(PersoonSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AllergieSeeder::class);
        $this->call(AllergiePerPersoonSeeder::class);

    }
}

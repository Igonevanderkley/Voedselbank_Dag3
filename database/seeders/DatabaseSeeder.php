<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(GezinSeeder::class);
        $this->call(PersoonSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AllergieSeeder::class);
        $this->call(AllergiePerPersoonSeeder::class);

        $this->call(QLeverancierTableSeeder::class);
        $this->call(QContactsTableSeeder::class);
        $this->call(QProductsTableSeeder::class);
        $this->call(QContactPerLeverancierTableSeeder::class);
        $this->call(QProductPerLeverancierTableSeeder::class);


        $this->call([
            S_ContactSeeder::class,
            S_GezinSeeder::class,
            S_PersoonSeeder::class,
            S_ContactPerGezinSeeder::class,

        ]);
    }
}

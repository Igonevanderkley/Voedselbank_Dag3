<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AllergiePerPersoon;

class AllergiePerPersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AllergiePerPersoon::create([
            'id' => 1,
            'persoon_id' => 4,
            'allergie_id' => 1,
        ]);

        AllergiePerPersoon::create([
            'id' => 2,
            'persoon_id' => 5,
            'allergie_id' => 2,
        ]);

        AllergiePerPersoon::create([
            'id' => 3,
            'persoon_id' => 6,
            'allergie_id' => 3,
        ]);


        AllergiePerPersoon::create([
            'id' => 4,
            'persoon_id' => 7,
            'allergie_id' => 4,
        ]);

        AllergiePerPersoon::create([
            'id' => 5,
            'persoon_id' => 8,
            'allergie_id' => 4,
        ]);

        AllergiePerPersoon::create([
            'id' => 6,
            'persoon_id' => 9,
            'allergie_id' => 2,
        ]);

        AllergiePerPersoon::create([
            'id' => 7,
            'persoon_id' => 10,
            'allergie_id' => 5,
        ]);

        AllergiePerPersoon::create([
            'id' => 8,
            'persoon_id' => 12,
            'allergie_id' => 2,
        ]);

        AllergiePerPersoon::create([
            'id' => 9,
            'persoon_id' => 13,
            'allergie_id' => 4,
        ]);

        AllergiePerPersoon::create([
            'id' => 10,
            'persoon_id' => 14,
            'allergie_id' => 1,
        ]);

        AllergiePerPersoon::create([
            'id' => 11,
            'persoon_id' => 15,
            'allergie_id' => 3,
        ]);

        AllergiePerPersoon::create([
            'id' => 12,
            'persoon_id' => 15,
            'allergie_id' => 5,
        ]);

        AllergiePerPersoon::create([
            'id' => 13,
            'persoon_id' => 17,
            'allergie_id' => 2,
        ]);

        AllergiePerPersoon::create([
            'id' => 14,
            'persoon_id' => 17,
            'allergie_id' => 4,
        ]);

        AllergiePerPersoon::create([
            'id' => 15,
            'persoon_id' => 18,
            'allergie_id' => 4,
        ]);

        AllergiePerPersoon::create([
            'id' => 16,
            'persoon_id' => 19,
            'allergie_id' => 4,
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Allergie;

class AllergieSeeder extends Seeder
{

    public function run(): void
    {
        Allergie::create([
            'id' => 1,
            'naam' => 'Gluten',
            'omschrijving' => 'Allergisch voor gluten',
            'anafylactisch_risico' => 'zeerlaag'
        ]);

        Allergie::create([
            'id' => 2,
            'naam' => 'Pindas',
            'omschrijving' => 'Allergisch voor pindas',
            'anafylactisch_risico' => 'hoog'
        ]);

        Allergie::create([
            'id' => 3,
            'naam' => 'Schaaldieren',
            'omschrijving' => 'Allergisch voor schaaldieren',
            'anafylactisch_risico' => 'redelijkHoog'
        ]);

        Allergie::create([
            'id' => 4,
            'naam' => 'Hazelnoten',
            'omschrijving' => 'Allergisch voor hazelnoten',
            'anafylactisch_risico' => 'laag'
        ]);

        Allergie::create([
            'id' => 5,
            'naam' => 'Lactose',
            'omschrijving' => 'Allergisch voor lactose',
            'anafylactisch_risico' => 'zeerlaag',
        ]);

        Allergie::create([
            'id' => 6,
            'naam' => 'Soja',
            'omschrijving' => 'Allergisch voor soja',
            'anafylactisch_risico' => 'zeerLaag',
        ]);
    }
}

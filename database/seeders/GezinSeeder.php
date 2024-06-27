<?php

namespace Database\Seeders;

use App\Models\Gezin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GezinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gezin::create([
            'id' => 1,
            'naam' => 'ZevenHuizenGezin',
            'code' => 'G0001',
            'omschrijving' => 'Bijstansgezin',
            'aantal_volwassenen' => 2,
            'aantal_kinderen' => 2,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 4,
        ]);

        Gezin::create([
            'id' => 2,
            'naam' => 'BergkampGezin',
            'code' => 'G0002',
            'omschrijving' => 'Bijstandsgezin',
            'aantal_volwassenen' => 2,
            'aantal_kinderen' => 1,
            'aantal_babys' => 1,
            'totaal_aantal_personen' => 4,
        ]);

        Gezin::create([
            'id' => 3,
            'naam' => 'HeuvelGezin',
            'code' => 'G0003',
            'omschrijving' => 'Bijstandsgezin',
            'aantal_volwassenen' => 2,
            'aantal_kinderen' => 0,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 2,
        ]);

        Gezin::create([
            'id' => 4,
            'naam' => 'ScherderGezin',
            'code' => 'G0004',
            'omschrijving' => 'Bijstandsgezin',
            'aantal_volwassenen' => 1,
            'aantal_kinderen' => 2,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 3,
        ]);

        Gezin::create([
            'id' => 5,
            'naam' => 'DeJongGezin',
            'code' => 'G0005',
            'omschrijving' => 'Bijstandsgezin',
            'aantal_volwassenen' => 1,
            'aantal_kinderen' => 1,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 2,
        ]);

        Gezin::create([
            'id' => 6,
            'naam' => 'VanDerBergGezin',
            'code' => 'G0006',
            'omschrijving' => 'Alleengaande',
            'aantal_volwassenen' => 1,
            'aantal_kinderen' => 0,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 1,
        ]);
    }
}

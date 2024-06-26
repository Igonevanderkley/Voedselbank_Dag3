<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QLeverancierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leverancier_q_s')->insert([
            [
                'idd' => 1,
                'naam' => 'Albert Heijn',
                'contact_persoon' => 'Ruud ter Weijden',
                'leverancier_nummer' => 'L0001',
                'leverancier_type' => 'Bedrijf',
            ],
            [
                'idd' => 2,
                'naam' => 'Albertus Kerk',
                'contact_persoon' => 'Leo Pastoor',
                'leverancier_nummer' => 'L0002',
                'leverancier_type' => 'Instelling',
            ],
            [
                'idd' => 3,
                'naam' => 'Gemeente Utrecht',
                'contact_persoon' => 'Mohammed Yaziddi',
                'leverancier_nummer' => 'L0003',
                'leverancier_type' => 'Overheidd',
            ],
            [
                'idd' => 4,
                'naam' => 'Boerderij Meerhoven',
                'contact_persoon' => 'Bertus van Driel',
                'leverancier_nummer' => 'L0004',
                'leverancier_type' => 'Particulier',
            ],
            [
                'idd' => 5,
                'naam' => 'Jan van der Heijden',
                'contact_persoon' => 'Jan van der Heijden',
                'leverancier_nummer' => 'L0005',
                'leverancier_type' => 'Donor',
            ],
            [
                'idd' => 6,
                'naam' => 'Vomar',
                'contact_persoon' => 'Jaco Pastorius',
                'leverancier_nummer' => 'L0006',
                'leverancier_type' => 'Bedrijf',
            ],
            [
                'idd' => 7,
                'naam' => 'DekaMarkt',
                'contact_persoon' => 'Sil den Dollaard',
                'leverancier_nummer' => 'L0007',
                'leverancier_type' => 'Bedrijf',
            ],
            [
                'idd' => 8,
                'naam' => 'Gemeente Vught',
                'contact_persoon' => 'Jan Blokker',
                'leverancier_nummer' => 'L0008',
                'leverancier_type' => 'Overheidd',
            ],
        ]);    
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QContactPerLeverancierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('q_contact_per_leverancier')->insert([
            [
                'id' => 1,
                'leverancier_id' => 1,
                'contact_id' => 7,
            ],
            [
                'id' => 2,
                'leverancier_id' => 2,
                'contact_id' => 8,
            ],
            [
                'id' => 3,
                'leverancier_id' => 3,
                'contact_id' => 9,
            ],
            [
                'id' => 4,
                'leverancier_id' => 4,
                'contact_id' => 10,
            ],
            [
                'id' => 5,
                'leverancier_id' => 6,
                'contact_id' => 11,
            ],
            [
                'id' => 6,
                'leverancier_id' => 7,
                'contact_id' => 12,
            ],
            [
                'id' => 7,
                'leverancier_id' => 8,
                'contact_id' => 13,
            ],
        ]);
    }
}

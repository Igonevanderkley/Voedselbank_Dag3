<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SContactPerGezin;

class S_ContactPerGezinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SContactPerGezin::create([
            'id' => 1,
            'gezin_id' => 1,
            'contact_id' => 1
        ]);

        SContactPerGezin::create([
            'id' => 2,
            'gezin_id' => 2,
            'contact_id' => 2
        ]);

        SContactPerGezin::create([
            'id' => 3,
            'gezin_id' => 3,
            'contact_id' => 3
        ]);

        SContactPerGezin::create([
            'id' => 4,
            'gezin_id' => 4,
            'contact_id' => 4
        ]);
        SContactPerGezin::create([
            'id' => 5,
            'gezin_id' => 5,
            'contact_id' => 5
        ]);
        SContactPerGezin::create([
            'id' => 6,
            'gezin_id' => 6,
            'contact_id' => 6
        ]);
    }
}

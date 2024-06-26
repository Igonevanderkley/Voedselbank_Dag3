<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products_q_s')->insert([
            [
                'id' => 1,
                'categorie_id' => 1,
                'naam' => 'Aardappel',
                'soort_allergie' => null,
                'barcode' => '8719587321239',
                'houdbaarheidsdatum' => '2024-07-12',
                'omschrijving' => 'Kruimige aardappel',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 2,
                'categorie_id' => 1,
                'naam' => 'Aardappel',
                'soort_allergie' => null,
                'barcode' => '8719587321239',
                'houdbaarheidsdatum' => '2024-07-26',
                'omschrijving' => 'Kruimige aardappel',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 3,
                'categorie_id' => 1,
                'naam' => 'Ui',
                'soort_allergie' => null,
                'barcode' => '8719473231335',
                'houdbaarheidsdatum' => '2024-07-16',
                'omschrijving' => 'Gele ui',
                'status' => 'NietOpVoorraad',
            ],
            [
                'id' => 4,
                'categorie_id' => 1,
                'naam' => 'Appel',
                'soort_allergie' => null,
                'barcode' => '8719486321333',
                'houdbaarheidsdatum' => '2024-09-04',
                'omschrijving' => 'Granny Smith',
                'status' => 'NietLeverbaar',
            ],
            [
                'id' => 5,
                'categorie_id' => 1,
                'naam' => 'Appel',
                'soort_allergie' => null,
                'barcode' => '8719486321332',
                'houdbaarheidsdatum' => '2024-09-04',
                'omschrijving' => 'Granny Smith',
                'status' => 'NietLeverbaar',
            ],
            [
                'id' => 6,
                'categorie_id' => 1,
                'naam' => 'Banaan',
                'soort_allergie' => 'Banaan',
                'barcode' => '8719481333326',
                'houdbaarheidsdatum' => '2024-07-12',
                'omschrijving' => 'Biologische Banaan',
                'status' => 'OverHoudbaarheidsDatum',
            ],
            [
                'id' => 7,
                'categorie_id' => 1,
                'naam' => 'Banaan',
                'soort_allergie' => 'Banaan',
                'barcode' => '8719481333326',
                'houdbaarheidsdatum' => '2024-07-19',
                'omschrijving' => 'Biologische Banaan',
                'status' => 'OverHoudbaarheidsDatum',
            ],
            [
                'id' => 8,
                'categorie_id' => 2,
                'naam' => 'Kaas',
                'soort_allergie' => 'Lactose',
                'barcode' => '8719487432133',
                'houdbaarheidsdatum' => '2024-09-19',
                'omschrijving' => 'Jonge Kaas',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 9,
                'categorie_id' => 2,
                'naam' => 'Rosbief',
                'soort_allergie' => null,
                'barcode' => '8719471231335',
                'houdbaarheidsdatum' => '2024-09-18',
                'omschrijving' => 'Rundvlees',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 10,
                'categorie_id' => 3,
                'naam' => 'Melk',
                'soort_allergie' => 'Lactose',
                'barcode' => '8719473213332',
                'houdbaarheidsdatum' => '2024-07-23',
                'omschrijving' => 'Halfvolle melk',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 11,
                'categorie_id' => 3,
                'naam' => 'Margarine',
                'soort_allergie' => null,
                'barcode' => '8719486321336',
                'houdbaarheidsdatum' => '2024-08-04',
                'omschrijving' => 'Plantaardige boter',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 12,
                'categorie_id' => 3,
                'naam' => 'Ei',
                'soort_allergie' => 'Eieren',
                'barcode' => '8719473213334',
                'houdbaarheidsdatum' => '2024-07-30',
                'omschrijving' => 'Scharrelei',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 13,
                'categorie_id' => 4,
                'naam' => 'Brood',
                'soort_allergie' => 'Gluten',
                'barcode' => '8719473213335',
                'houdbaarheidsdatum' => '2024-07-18',
                'omschrijving' => 'Volkoren brood',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 14,
                'categorie_id' => 4,
                'naam' => 'Gevulde Koek',
                'soort_allergie' => 'Amandel',
                'barcode' => '8719483321333',
                'houdbaarheidsdatum' => '2024-09-07',
                'omschrijving' => 'Banketbakkers kwaliteit',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 15,
                'categorie_id' => 5,
                'naam' => 'Fristi',
                'soort_allergie' => 'Lactose',
                'barcode' => '8719471231331',
                'houdbaarheidsdatum' => '2024-10-28',
                'omschrijving' => 'Frisdrank',
                'status' => 'NietOpVoorraad',
            ],
            [
                'id' => 16,
                'categorie_id' => 5,
                'naam' => 'Appelsap',
                'soort_allergie' => null,
                'barcode' => '8719486321331',
                'houdbaarheidsdatum' => '2024-10-19',
                'omschrijving' => '100% vruchtensap',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 17,
                'categorie_id' => 5,
                'naam' => 'Koffie',
                'soort_allergie' => 'Caffeïne',
                'barcode' => '8719473813335',
                'houdbaarheidsdatum' => '2024-10-23',
                'omschrijving' => 'Arabica koffie',
                'status' => 'OverHoudbaarheidsDatum',
            ],
            [
                'id' => 18,
                'categorie_id' => 5,
                'naam' => 'Thee',
                'soort_allergie' => 'Theïne',
                'barcode' => '8719473293393',
                'houdbaarheidsdatum' => '2024-09-02',
                'omschrijving' => 'Ceylon thee',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 19,
                'categorie_id' => 6,
                'naam' => 'Pasta',
                'soort_allergie' => 'Gluten',
                'barcode' => '8719473213334',
                'houdbaarheidsdatum' => '2024-11-16',
                'omschrijving' => 'Macaroni',
                'status' => 'NietLeverbaar',
            ],
            [
                'id' => 20,
                'categorie_id' => 6,
                'naam' => 'Rijst',
                'soort_allergie' => null,
                'barcode' => '8719473213332',
                'houdbaarheidsdatum' => '2024-12-25',
                'omschrijving' => 'Basmati Rijst',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 21,
                'categorie_id' => 7,
                'naam' => 'Knorr Nasi Mix',
                'soort_allergie' => null,
                'barcode' => '8719473513135',
                'houdbaarheidsdatum' => '2024-12-18',
                'omschrijving' => 'Nasi kruiden',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 22,
                'categorie_id' => 7,
                'naam' => 'Tomatensoep',
                'soort_allergie' => null,
                'barcode' => '8719473713337',
                'houdbaarheidsdatum' => '2024-12-23',
                'omschrijving' => 'Romige tomatensoep',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 23,
                'categorie_id' => 8,
                'naam' => 'Soepstengels',
                'soort_allergie' => 'Gluten',
                'barcode' => '8719473123338',
                'houdbaarheidsdatum' => '2024-12-20',
                'omschrijving' => 'Italiaanse soepstengels',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 24,
                'categorie_id' => 8,
                'naam' => 'Pindakaas',
                'soort_allergie' => 'Pinda',
                'barcode' => '8719473821339',
                'houdbaarheidsdatum' => '2024-12-27',
                'omschrijving' => 'Romige pindakaas',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 25,
                'categorie_id' => 8,
                'naam' => 'Jam',
                'soort_allergie' => null,
                'barcode' => '8719473213309',
                'houdbaarheidsdatum' => '2024-12-29',
                'omschrijving' => 'Aardbeien jam',
                'status' => 'OpVoorraad',
            ],
            [
                'id' => 26,
                'categorie_id' => 8,
                'naam' => 'Hagelslag',
                'soort_allergie' => null,
                'barcode' => '8719473213322',
                'houdbaarheidsdatum' => '2024-12-15',
                'omschrijving' => 'Pure chocoladehagelslag',
                'status' => 'OpVoorraad',
            ],
        ]);
    }
}

<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Persoon extends Model
{
    protected $table = 'persoon'; // Replace 'allergies' with your actual table name

    protected $fillable = [
        'gezin_id',
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'geboortedatum',
        'type_persoon',
        'is_vertegenwoordiger',
    ];

    // Add any relationships or custom methods here
    public function gezin()
    {
        return $this->belongsTo(Gezin::class, 'gezin_id');
    }

    static function getGezinnen()
    {
        return Self::join('allergie_per_persoon', 'persoon.id', '=', 'allergie_per_persoon.persoon_id')
            ->join('allergie', 'allergie.id', '=', 'allergie_per_persoon.allergie_id')
            ->join('gezin', 'gezin.id', '=', 'persoon.gezin_id')
            ->leftJoin('persoon as vertegenwoordiger', function ($join) {
                $join->on('vertegenwoordiger.gezin_id', '=', 'gezin.id')
                    ->where('vertegenwoordiger.is_vertegenwoordiger', true);
            })
            ->select(
                'gezin.id',
                'gezin.naam as gezinsNaam',
                'gezin.omschrijving as gezinsOmschrijving',
                'gezin.aantal_volwassenen',
                'gezin.aantal_kinderen',
                'gezin.aantal_babys',
                'vertegenwoordiger.voornaam as vertegenwoordigerVoornaam',
                'vertegenwoordiger.tussenvoegsel as vertegenwoordigerTussenvoegsel',
                'vertegenwoordiger.achternaam as vertegenwoordigerAchternaam'
            )
            ->groupBy(
                'gezin.id',
                'vertegenwoordiger.voornaam',
                'vertegenwoordiger.tussenvoegsel',
                'vertegenwoordiger.achternaam'
            )
            ->get();
    }

    static function getGezinnenPerAllergie($allergieId)
    {
        return Self::join('allergie_per_persoon', 'persoon.id', '=', 'allergie_per_persoon.persoon_id')
            ->join('allergie', 'allergie.id', '=', 'allergie_per_persoon.allergie_id')
            ->join('gezin', 'gezin.id', '=', 'persoon.gezin_id')
            ->leftJoin('persoon as vertegenwoordiger', function ($join) {
                $join->on('vertegenwoordiger.gezin_id', '=', 'gezin.id')
                    ->where('vertegenwoordiger.is_vertegenwoordiger', true);
            })
            ->select(
                'gezin.id',
                'gezin.naam as gezinsNaam',
                'gezin.omschrijving as gezinsOmschrijving',
                'gezin.aantal_volwassenen',
                'gezin.aantal_kinderen',
                'gezin.aantal_babys',
                'vertegenwoordiger.voornaam as vertegenwoordigerVoornaam',
                'vertegenwoordiger.tussenvoegsel as vertegenwoordigerTussenvoegsel',
                'vertegenwoordiger.achternaam as vertegenwoordigerAchternaam'
            )
            ->where('allergie_per_persoon.allergie_id', $allergieId)
            ->groupBy(
                'gezin.id',
                'vertegenwoordiger.voornaam',
                'vertegenwoordiger.tussenvoegsel',
                'vertegenwoordiger.achternaam'
            )
            ->get();
    }
}

<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Gezin extends Model
{
    protected $table = 'gezin'; // Replace 'allergies' with your actual table name

    protected $fillable = [
        'naam',
        'code',
        'omschrijving',
        'aantal_volwassenen',
        'aantal_kinderen',
        'aantal_babys',
        'totaal_aantal_personen',
    ];

    // Add any relationships or custom methods here
    public function personen()
    {
        return $this->hasMany(Persoon::class, 'gezin_id');
    }
}

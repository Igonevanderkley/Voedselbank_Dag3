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
}

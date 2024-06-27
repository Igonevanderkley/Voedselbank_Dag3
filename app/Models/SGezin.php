<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SGezin extends Model
{
    use HasFactory;
    protected $table = 's_gezin';
    protected $fillable = [
        'naam',
        'code',
        'omschrijving',
        'aantal_volwassenen',
        'aantal_kinderen',
        'aantal_babys',
        'totaal_aantal_personen'
    ];
    // een gezin kan meerdere personen hebben
    public function personen()
    {
        return $this->hasMany(SPersoon::class);
    }


    public function contactenPerGezin()
    {
        return $this->hasMany(SContactPerGezin::class);
    }
}

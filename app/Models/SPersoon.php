<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPersoon extends Model
{
    use HasFactory;
    protected $table = 's_persoon';

    protected $fillable = [
        'gezin_id',
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'geboortedatum',
        'type_persoon',
        'is_vertegenwoordiger'
    ];
    public function gezin()
    {
        return $this->belongsTo(SGezin::class, 'gezin_id');
    }
}

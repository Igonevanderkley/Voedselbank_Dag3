<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SContact extends Model
{
    use HasFactory;
    protected $table = 's_contact';

    protected $fillable = [
        'straat',
        'huisnummer',
        'toevoeging',
        'postcode',
        'woonplaats',
        'email',
        'mobiel'
    ];

    // realtie tussen s_contact en s_contact_per_gezin
    public function contactenPerGezin()
    {
        return $this->hasMany(SContactPerGezin::class);
    }
}

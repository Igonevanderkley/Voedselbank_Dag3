<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeverancierQ extends Model
{
    use HasFactory;
    protected $fillable = [
        'naam',
        'contact_persoon',
        'leverancier_nummer',
        'leverancier_type',
    ];
}

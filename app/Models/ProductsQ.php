<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsQ extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'naam',
        'soort_allergie',
        'barcode',
        'houdbaarheidsdatum',
        'omschrijving',
        'status',
    ];
}

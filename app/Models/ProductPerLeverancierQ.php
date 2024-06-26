<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancierQ extends Model
{
    use HasFactory;

    protected $fillable = [
        'leverancier_id',
        'product_id',
        'datum_aangeleverd',
        'datum_eerst_volgende_levering',
    ];

    public function leverancier()
    {
        return $this->belongsTo(LeverancierQ::class);
    }

    public function product()
    {
        return $this->belongsTo(ProductsQ::class);
    }
}

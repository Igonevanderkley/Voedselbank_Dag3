<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AllergiePerPersoon extends Model
{
    protected $table = 'allergie_per_persoon';

    protected $fillable = [
        'persoon_id',
        'allergie_id',
    ];

    // Add any relationships or custom methods here

    public function allergie()
    {
        return $this->belongsTo(Allergie::class, 'allergie_id');
    }

    public function persoon()
    {
        return $this->belongsTo(Persoon::class, 'persoon_id');
    }
    
}

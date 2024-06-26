<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerLeverancierQ extends Model
{
    use HasFactory;

    protected $fillable = [
        'leverancier_id',
        'contact_id',
    ];

    public function leverancier()
    {
        return $this->belongsTo(LeverancierQ::class);
    }

    public function contact()
    {
        return $this->belongsTo(ContactsQ::class);
    }
}

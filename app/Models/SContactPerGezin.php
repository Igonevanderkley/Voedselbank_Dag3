<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SContactPerGezin extends Model
{
    use HasFactory;
    protected $table = 's_contact_per_gezin';

    protected $fillable = [
        'gezin_id',
        'contact_id'
    ];

    public function gezin()
    {
        return $this->belongsTo(SGezin::class, 'gezin_id');
    }

    public function contact()
    {
        return $this->belongsTo(SContact::class, 'contact_id');
    }
}



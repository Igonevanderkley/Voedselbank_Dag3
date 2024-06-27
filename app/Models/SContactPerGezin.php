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
}

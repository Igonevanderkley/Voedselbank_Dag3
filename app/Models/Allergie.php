<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Allergie extends Model
{
    protected $table = 'allergie';

    protected $fillable = [
        'naam',
        'omshrijving',
        'anafylactisch_risico',
    ];

    // Add any relationships or custom methods here

}
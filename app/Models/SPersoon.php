<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SGezin;
use Illuminate\Support\Facades\DB;

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
    // public static function klantenDetails($id)
    // {
    //     return DB::table('s_persoon')
    //         ->join('s_gezin', 's_persoon.gezin_id', '=', 's_gezin.id')
    //         ->join('s_contact_per_gezin', 's_gezin.id', '=', 's_contact_per_gezin.gezin_id')
    //         ->join(
    //             's_contact',
    //             's_contact_per_gezin.contact_id',
    //             '=',
    //             's_contact.id'
    //         )
    //         ->where('s_gezin.id', $id)
    //         ->select(
    //             's_persoon.id',
    //             's_persoon.voornaam',
    //             's_persoon.tussenvoegsel',
    //             's_persoon.achternaam',
    //             's_persoon.geboortedatum',
    //             's_persoon.type_persoon',
    //             's_persoon.is_vertegenwoordiger',
    //             's_contact.straat',
    //             's_contact.huisnummer',
    //             's_contact.toevoeging',
    //             's_contact.postcode',
    //             's_contact.woonplaats',
    //             's_contact.email',
    //             's_contact.mobiel'
    //         )
    //         ->get();
    // }
}

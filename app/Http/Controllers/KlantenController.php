<?php

namespace App\Http\Controllers;

use App\Models\SGezin;
use App\Models\SPersoon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KlantenController extends Controller
{
    // public function index()
    // {
    //     $klanten = SPersoon::join('s_contact_per_gezin', 's_persoon.gezin_id', '=', 's_contact_per_gezin.gezin_id')
    //         ->join('s_contact', 's_contact_per_gezin.contact_id', '=', 's_contact.id')
    //         ->join('s_gezin', 's_persoon.gezin_id', '=', 's_gezin.id')
    //         ->select(
    //             's_gezin.naam as gezin_naam',
    //             DB::raw('MAX(s_persoon.is_vertegenwoordiger) as is_vertegenwoordiger'),
    //             DB::raw('MAX(s_contact.email) as email'),
    //             DB::raw('MAX(s_contact.mobiel) as mobiel'),
    //             DB::raw("MAX(CONCAT(s_contact.straat, ' ', s_contact.huisnummer, ' ', IFNULL(s_contact.toevoeging, ''), ', ', s_contact.postcode, ' ', s_contact.woonplaats)) AS adres")
    //         )
    //         ->groupBy('s_persoon.gezin_id', 's_contact.id')
    //         ->get();

    //     return view('klanten.index')->with('klanten', $klanten);
    // }


    public function index(Request $request)
    {
        $postcode = $request->input('postcode'); // Verkrijg de postcode uit de request

        $query = SPersoon::join('s_contact_per_gezin', 's_persoon.gezin_id', '=', 's_contact_per_gezin.gezin_id')
            ->join('s_contact', 's_contact_per_gezin.contact_id', '=', 's_contact.id')
            ->join('s_gezin', 's_persoon.gezin_id', '=', 's_gezin.id')
            ->select(
                's_gezin.naam as gezin_naam',
                DB::raw('MAX(s_persoon.is_vertegenwoordiger) as is_vertegenwoordiger'),
                DB::raw('MAX(s_contact.email) as email'),
                DB::raw('MAX(s_contact.mobiel) as mobiel'),
                DB::raw("MAX(CONCAT(s_contact.straat, ' ', s_contact.huisnummer, ' ', IFNULL(s_contact.toevoeging, ''), ', ', s_contact.postcode, ' ', s_contact.woonplaats)) AS adres")
            )
            ->groupBy('s_persoon.gezin_id', 's_contact.id');

        if (!empty($postcode)) {
            $query->havingRaw("MAX(s_contact.postcode) = ?", [$postcode]); // Filter op postcode
        }

        $klanten = $query->get();

        if ($klanten->isEmpty()) {
            return view('klanten.index')->with('message', 'Er zijn geen klanten bekend die de geselecteerde postcode hebben.');
        }

        return view('klanten.index')->with('klanten', $klanten);
    }
    // public function show($id)
    // {
    //     $klantenDetails = SPersoon::klantenDetails($id);
    //     dd($klantenDetails);
    //     return view('klanten.klantenDetails')->with('klantenDetails', $klantenDetails);
    // }
    public function klantenDetails($id)
    {
        $klantenDetails = DB::table('s_persoon')
            ->join('s_gezin', 's_persoon.gezin_id', '=', 's_gezin.id')
            ->join('s_contact_per_gezin', 's_gezin.id', '=', 's_contact_per_gezin.gezin_id')
            ->join('s_contact', 's_contact_per_gezin.contact_id', '=', 's_contact.id')
            ->where('s_gezin.id', $id)
            ->select(
                's_persoon.id',
                's_persoon.voornaam',
                's_persoon.tussenvoegsel',
                's_persoon.achternaam',
                's_persoon.geboortedatum',
                's_persoon.type_persoon',
                's_persoon.is_vertegenwoordiger',
                's_contact.straat',
                's_contact.huisnummer',
                's_contact.toevoeging',
                's_contact.postcode',
                's_contact.woonplaats',
                's_contact.email',
                's_contact.mobiel'
            )
            ->get();
        return view('klanten.klantenDetails', compact('klantenDetails'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gezin;
use App\Models\Persoon;
use App\Models\Allergie;

class GezinController extends Controller
{
    public function read()
    {

        $allergienOpties = Allergie::all();

        $gezinnen = Persoon::join('allergie_per_persoon', 'persoon_id', '=', 'persoon.id')
            ->join('allergie', 'allergie_id', '=', 'allergie.id')
            ->join('gezin', 'gezin_id', '=', 'gezin.id')
            ->select('gezin.id', 'gezin.naam as gezinsNaam', 'gezin.omschrijving as gezinsOmschrijving', 'gezin.aantal_volwassenen', 'gezin.aantal_kinderen', 'gezin.aantal_babys')
            ->groupBy('gezin.id')
            ->get();

        $vertegenwoordigers = Persoon::select('voornaam', 'tussenvoegsel', 'achternaam')
            ->where('is_vertegenwoordiger', 1)
            ->get();

        return view('gezinnen', ['gezinnen' => $gezinnen, 'vertegenwoordigers' => $vertegenwoordigers, 'allergienOpties' => $allergienOpties]);
    }

    public function filter(Request $request)
    {

        $allergieId = $request->allergieId;

        $allergienOpties = Allergie::all();


        $vertegenwoordigers = Persoon::select('voornaam', 'tussenvoegsel', 'achternaam')
            ->where('is_vertegenwoordiger', 1)
            ->get();

        $gezinnen = Persoon::join('allergie_per_persoon', 'persoon_id', '=', 'persoon.id')
            ->join('allergie', 'allergie_id', '=', 'allergie.id')
            ->join('gezin', 'gezin_id', '=', 'gezin.id')
            ->select('gezin.id', 'gezin.naam as gezinsNaam', 'gezin.omschrijving as gezinsOmschrijving', 'gezin.aantal_volwassenen', 'gezin.aantal_kinderen', 'gezin.aantal_babys')
            ->groupBy('gezin.id')

            ->where('allergie_per_persoon.allergie_id', $allergieId)->get();



        return view('gezinnen', ['gezinnen' => $gezinnen, 'vertegenwoordigers' => $vertegenwoordigers, 'allergienOpties' => $allergienOpties]);
        // dd($request->all());
    }
}

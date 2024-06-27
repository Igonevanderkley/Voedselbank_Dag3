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

        $gezinnen = Persoon::getGezinnen();

        return view('gezinnen', ['gezinnen' => $gezinnen, 'allergienOpties' => $allergienOpties]);
    }

    public function filter(Request $request)
    {
        $allergieId = $request->allergieId;

        if ($allergieId == 0) {
            return redirect()->route('gezinnen');
        }

        $allergienOpties = Allergie::all();

        $gezinnen = Persoon::getGezinnenPerAllergie($allergieId);


        if ($gezinnen->isEmpty()) {
            return redirect()->route('gezinnen')
                ->with('status', 'Er zijn geen gezinnen met deze allergie');
        } else {
            return view('gezinnen', ['gezinnen' => $gezinnen, 'allergienOpties' => $allergienOpties]);
        }
    }
}

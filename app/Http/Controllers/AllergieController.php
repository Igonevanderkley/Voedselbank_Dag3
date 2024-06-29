<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergie;
use App\Models\Gezin;
use App\Models\Persoon;
use App\Models\AllergiePerPersoon;
use Exception;

class AllergieController extends Controller
{
    public function read($gezinId)
    {
        try {
            $gezinData = Gezin::where('id', $gezinId)->first();
            if (!$gezinData) {
                throw new Exception("Gezin not found with id $gezinId");
            }

            $allergieenPerPersonen = Persoon::join('gezin', 'gezin_id', '=', 'gezin.id')
                ->join('allergie_per_persoon', 'persoon_id', '=', 'persoon.id')
                ->join('allergie', 'allergie_id', '=', 'allergie.id')
                ->where('gezin.id', $gezinId)
                ->get();

            return view('allergie_details', ['allergieenPerPersonen' => $allergieenPerPersonen, 'gezinData' => $gezinData]);
        } catch (\Exception $e) {
            return response()->view('errors.general', ['message' => $e->getMessage()], 500);
        }
    }


    public function update($allergieId, $persoonId)
    {
        $allergienOpties = Allergie::all();
        $gezinId = Persoon::select('gezin_id')->where('id', $persoonId)->first();

        return view('wijzig_allergie', ['allergienOpties' => $allergienOpties, 'persoonId' => $persoonId, 'gezinId' => $gezinId, 'allergieId' => $allergieId]);
    }

    public function edit(Request $request)
    {
        $allergieId = $request->allergieId;
        $persoonId = $request->persoonId;
        $huidigAllergieId = $request->huidigAllergieId;

        $gezinId = Persoon::select('gezin_id')
            ->where('id', $persoonId)->first();

        $risico = Allergie::select('anafylactisch_risico')->where('id', $huidigAllergieId)->value('anafylactisch_risico');
        session(['gezinId' => $gezinId->gezin_id]);


        if ($risico == 'hoog') {
            return redirect()->route('wijzig_allergie', ['allergieId' => $allergieId, 'persoonId' => $persoonId])
                ->with('status', 'Voor het wijzigen van deze allergie wordt geadviseerd eerst een arts te raadplegen vanwege een hoog risico op een anafylactische shock.');
        } else {
            $allergiePerPersoon = AllergiePerPersoon::where('persoon_id', $persoonId)->first();
            $allergiePerPersoon->allergie_id = $allergieId;
            $allergiePerPersoon->save();

            return redirect()->route('wijzig_allergie', ['allergieId' => $allergieId, 'persoonId' => $persoonId])
                ->with('status', 'De wijziging is doorgevoerd');
        }
    }
}

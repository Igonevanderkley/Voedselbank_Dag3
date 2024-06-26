<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergie;
use App\Models\Gezin;
use App\Models\Persoon;
use App\Models\AllergiePerPersoon;

class AllergieController extends Controller
{
    public function read($gezinId)
    {
        $gezinData = Gezin::where('id', $gezinId)->first();
        
        $allergieenPerPersonen = Persoon::join('gezin', 'gezin_id', '=', 'gezin.id')
            ->join('allergie_per_persoon', 'persoon_id', '=', 'persoon.id')
            ->join('allergie', 'allergie_id', '=', 'allergie.id')
            ->where('gezin.id', $gezinId)
            ->get();

        // where('id', $gezinId)->get();

        // $allergieen = persoon::all();


        return view('allergie_details', ['allergieenPerPersonen' => $allergieenPerPersonen, 'gezinData' => $gezinData]);
    }

    public function update($allergieId, $persoonId) {

        $allergienOpties = Allergie::all();

        return view('wijzig_allergie', ['allergienOpties' => $allergienOpties, 'persoonId' => $persoonId]);
    }

    public function edit(Request $request) {

        // dd($request->all());
        $allergieRisico = allergie::select('anafylactisch_risico')
        ->where('id', $request->allergieId)
        ->get();


        if ($allergieRisico == 'zeerlaag') 
        {
            dd('zeerlaag');
        }


        $allergieId = $request->allergieId;
        $persoonId = $request->persoonId;

        $gezinId = Persoon::
        select('gezin_id')
        ->where('id', $persoonId)->first();

        $allergiePerPersoon = AllergiePerPersoon::where('persoon_id', $persoonId)->first();
        $allergiePerPersoon->allergie_id = $allergieId;
        $allergiePerPersoon->save();

        // return redirect()->route('allergie_details', ['gezinId' => $gezinId->gezin_id]);

        return redirect()->route('allergie_details', ['gezinId' => $gezinId->gezin_id])->with('status', 'De wijziging is doorgevoerd');


    }
}

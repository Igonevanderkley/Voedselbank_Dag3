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
            // Get the data for the specified gezin
            $gezinData = Gezin::where('id', $gezinId)->first();
            if (!$gezinData) {
                throw new Exception("Gezin not found with id $gezinId");
            }

            // Get all allergieen for the specified gezin
            $allergieenPerPersonen = Persoon::join('gezin', 'gezin_id', '=', 'gezin.id')
                ->join('allergie_per_persoon', 'persoon_id', '=', 'persoon.id')
                ->join('allergie', 'allergie_id', '=', 'allergie.id')
                ->where('gezin.id', $gezinId)
                ->get();

            return view('allergie_details', ['allergieenPerPersonen' => $allergieenPerPersonen, 'gezinData' => $gezinData]);
        } catch (\Exception $e) {
            // Handle the exception (e.g., log the error, show an error message)
            return response()->view('errors.general', ['message' => $e->getMessage()], 500);
        }
    }


    public function update($allergieId, $persoonId)
    {
        // Get all allergieen options
        $allergienOpties = Allergie::all();
        $gezinId = Persoon::select('gezin_id')->where('id', $persoonId)->first();

        return view('wijzig_allergie', ['allergienOpties' => $allergienOpties, 'persoonId' => $persoonId, 'gezinId' => $gezinId, 'allergieId' => $allergieId]);
    }

    public function edit(Request $request)
    {
        // Get the allergieId and persoonId from the request
        $allergieId = $request->allergieId;
        $persoonId = $request->persoonId;

        // Get the gezinId from the persoonId
        $gezinId = Persoon::select('gezin_id')
            ->where('id', $persoonId)->first();

        $allergiePerPersoon = AllergiePerPersoon::where('persoon_id', $persoonId)->first();
        $allergiePerPersoon->allergie_id = $allergieId;
        $allergiePerPersoon->save();


        // Store the gezinId in the session
        session(['gezinId' => $gezinId->gezin_id]);

        // Redirect to the allergie details page
        return redirect()->route('wijzig_allergie', ['allergieId' => $allergieId, 'persoonId' => $persoonId])
            ->with('status', 'De wijziging is doorgevoerd');
    }
}

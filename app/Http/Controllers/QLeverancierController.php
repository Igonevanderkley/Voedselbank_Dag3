<?php

namespace App\Http\Controllers;

use App\Models\ContactPerLeverancierQ;
use Illuminate\Http\Request;
use App\Models\LeverancierQ;

class QLeverancierController extends Controller
{
    public function show(Request $request)
{
    // Haal alle leveranciers op
    $query = ContactPerLeverancierQ::select('q_contact_per_leverancier.*', 'leverancier_q_s.*', 'contacts_q_s.*')
        ->from('q_contact_per_leverancier')
        ->join('leverancier_q_s', 'q_contact_per_leverancier.leverancier_id', '=', 'leverancier_q_s.id')
        ->join('contacts_q_s', 'q_contact_per_leverancier.contact_id', '=', 'contacts_q_s.id');

    // Check of een leverancierstype is geselecteerd
    if ($request->has('leverancier_type')) {
        $leverancierType = $request->input('leverancier_type');
        $query->where('leverancier_q_s.leverancier_type', $leverancierType);
    }

    $leveranciers = $query->get();

    // Check of er resultaten zijn en geef dit door aan de view
    $hasLeveranciers = !$leveranciers->isEmpty();

    return view('leverancier.show', [
        'leveranciers' => $leveranciers,
        'hasLeveranciers' => $hasLeveranciers,
        'leverancierType' => $leverancierType ?? null
    ]);
}

    
}

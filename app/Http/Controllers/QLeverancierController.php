<?php

namespace App\Http\Controllers;

use App\Models\ContactPerLeverancierQ;
use App\Models\ProductPerLeverancierQ;
use Illuminate\Http\Request;

class QLeverancierController extends Controller
{
    public function show(Request $request)
    {
        // Haal alle leveranciers op
        $query = ContactPerLeverancierQ::select('contact_per_leverancier_q_s.*', 'leverancier_q_s.*', 'contacts_q_s.*')
                                        ->from('contact_per_leverancier_q_s')
                                        ->join('leverancier_q_s', 'contact_per_leverancier_q_s.leverancier_id', '=', 'leverancier_q_s.idd')
                                        ->join('contacts_q_s', 'contact_per_leverancier_q_s.contact_id', '=', 'contacts_q_s.id');

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

    public function details()
    {
        // Fetch contact details for the specified leverancier
        $query_contacts = ContactPerLeverancierQ::select('leverancier_q_s.naam', 'leverancier_q_s.leverancier_nummer', 'leverancier_q_s.leverancier_type')
                                                ->join('leverancier_q_s', 'contact_per_leverancier_q_s.leverancier_id', '=', 'leverancier_q_s.idd')
                                                // ->where('leverancier_q_s.idd', '=', $id)
                                                ->get();
         
                                                // dd($query_contacts);
    
        // Fetch product details for the specified leverancier
        $query_products = ProductPerLeverancierQ::select('products_q_s.naam', 'products_q_s.soort_allergie', 'products_q_s.barcode', 'products_q_s.houdbaarheidsdatum')
                                                ->join('products_q_s', 'product_per_leverancier_q_s.product_id', '=', 'products_q_s.id')
                                                // ->where('product_per_leverancier_q_s.leverancier_id', '=', $id)
                                                ->get();
    
        // Return the leverancier details to the view
        return view('leverancier.details', [
            'query_contacts' => $query_contacts,
            'query_products' => $query_products
        ]);
    }
}

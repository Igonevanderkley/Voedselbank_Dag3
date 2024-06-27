<?php

namespace App\Http\Controllers;

use App\Models\ContactPerLeverancierQ;
use App\Models\ProductPerLeverancierQ;
use App\Models\ProductsQ;
use Carbon\Carbon;
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

    public function details($id_leverancier)
    {
        // Fetch contact details for the specified leverancier
        $query_contacts = ContactPerLeverancierQ::select('leverancier_q_s.naam', 'leverancier_q_s.leverancier_nummer', 'leverancier_q_s.leverancier_type')
            ->join('leverancier_q_s', 'contact_per_leverancier_q_s.leverancier_id', '=', 'leverancier_q_s.idd')
            ->where('leverancier_q_s.idd', '=', $id_leverancier)
            ->get();

        // dd($query_contacts);

        // Fetch product details for the specified leverancier
        $query_products = ProductPerLeverancierQ::select('products_q_s.id', 'products_q_s.naam', 'products_q_s.soort_allergie', 'products_q_s.barcode', 'products_q_s.houdbaarheidsdatum')
            ->join('products_q_s', 'product_per_leverancier_q_s.product_id', '=', 'products_q_s.id')
            ->where('product_per_leverancier_q_s.leverancier_id', '=', $id_leverancier)
            ->get();

        // dd($query_products);


        // Return the leverancier details to the view
        return view('leverancier.details', [
            'query_contacts' => $query_contacts,
            'query_products' => $query_products,
        ]);
    }
    // return view('stock_management/update', ['productData' => $productData, 'categories' => $categories]);
    public function edit($id)
    {
        // Fetch product details for the specified leverancier
        $query_date = ProductsQ::select('products_q_s.houdbaarheidsdatum', 'products_q_s.id')
            ->where('products_q_s.id', '=', $id)
            ->get();


        // $query_date = ProductsQ::select('products_q_s.houdbaarheidsdatum')
        // ->where('products_q_s.id', '=', $id_product);

        // Return the leverancier details to the view
        return view('leverancier.edit', [
            'query_date' => $query_date,
            'error' => null,
        ]);
    }

//     public function update(Request $request, $id)
// {
//     $query_date = ProductsQ::select('products_q_s.houdbaarheidsdatum', 'products_q_s.id')
//     ->get();

//     $query_date->houdbaarheidsdatum = $request->houdbaarheidsdatum;
//     $query_date->save();

//     // public function update(Request $request, $date_id)
//     // {
//     //     $query_date = ProductsQ::select('products_q_s.id', 'products_q_s.naam', 'products_q_s.houdbaarheidsdatum')
//     //         ->where('products_q_s.id', '=', $date_id)
//     //         ->get();
            
//     //     $product = ProductsQ::findOrFail($date_id);
    
//     //     $newDate = Carbon::parse($request->input('new_houdbaarheidsdatum'));
//     //     $currentDate = Carbon::now();
    
//     //     // Bereken het verschil in dagen tussen de nieuwe datum en de huidige datum
//     //     $diffInDaysFromCurrent = $newDate->diffInDays($currentDate);
    
//     //     // Bereken het verschil in dagen tussen de nieuwe datum en de houdbaarheidsdatum in de database
//     //     $diffInDaysFromStored = $newDate->diffInDays(Carbon::parse($product->houdbaarheidsdatum));
    
//     //     // Controleer of het verschil meer dan 7 dagen is vanaf de huidige datum
//     //     if ($diffInDaysFromCurrent > 7) {
//     //         $error = 'De houdbaarheidsdatum is niet gewijzigd. De nieuwe datum mag maximaal 7 dagen na de huidige datum zijn.';
//     //         return view('leverancier.edit', compact('product', 'error'));
//     //     }
    
//     //     // Controleer of het verschil 8 dagen of meer is vanaf de opgeslagen houdbaarheidsdatum
//     //     if ($diffInDaysFromStored >= 8) {
//     //         $warning = 'De geselecteerde houdbaarheidsdatum is 8 dagen of meer later dan de huidige houdbaarheidsdatum in de database.';
//     //         // Stuur de waarschuwing naar de view samen met de productgegevens
//     //         return view('leverancier.edit', compact('product', 'warning'));
//     //     }
    
//     //     // Als de validatie slaagt, werk het product bij
//     //     $product->houdbaarheidsdatum = $newDate;
//     //     $product->save();
    
//         // Reload the edit view with updated data and success message
    
//         return view('leverancier.edit', [
//             'query_date' => $query_date,
//             'success' => 'Houdbaarheidsdatum succesvol gewijzigd!',
//         ]);
//     }
}
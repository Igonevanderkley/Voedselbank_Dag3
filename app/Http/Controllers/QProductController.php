<?php
namespace App\Http\Controllers;

use App\Models\ProductsQ;
use App\Models\LeverancierQ;
use Illuminate\Http\Request;

class QProductController extends Controller
{
    public function index(LeverancierQ $leveranciers)
    {
        $producten = $leveranciers->producten; // Veronderstel dat je een relatie hebt ingesteld in je model
        return view('producten.index', compact('producten', 'leverancier'));
    }

    public function edit()
    {
        return view('producten.edit');
    }
    
}

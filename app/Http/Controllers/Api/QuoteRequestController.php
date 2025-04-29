<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'nullable|string',
        'services' => 'required|array',
        'services.*' => 'exists:services,id', // Vérification de l'existence de chaque ID dans la table services
    ]);

    // Calcul du prix total en fonction des services donnés
    $total = Service::whereIn('id', $data['services'])->sum('price');

    $quote = QuoteRequest::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'message' => $data['message'] ?? null,
        'total_price' => $total,
    ]);

    $quote->services()->attach($data['services']);

    return response()->json($quote->load('services'), 201);
}

}

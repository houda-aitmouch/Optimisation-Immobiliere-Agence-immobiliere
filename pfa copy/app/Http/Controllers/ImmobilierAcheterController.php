<?php

namespace App\Http\Controllers;

use App\Models\ImmobilierAcheter;
use Illuminate\Http\Request;

class ImmobilierAcheterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les propriétés à acheter
        $properties = ImmobilierAcheter::all();

        // Renvoyer les données à la vue index
        return view('acheter.index', compact('properties'));
    }
    public function show($id)
    {
        // Trouver la propriété par son ID
        $property = ImmobilierAcheter::findOrFail($id);

        // Renvoyer les données à la vue show
        return view('acheter.show', compact('property'));
    }


}

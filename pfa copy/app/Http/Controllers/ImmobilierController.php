<?php

namespace App\Http\Controllers;

use App\Models\ImmobilierVendre;
use Illuminate\Http\Request;

class ImmobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les propriétés de la table immobilier_vendre
        $properties = ImmobilierVendre::all();

        // Renvoyer les données à la vue index pour affichage
        return view('vendre.index', compact('properties'));
    }
    public function create()
    {
        return view('vendre.create');
    }
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'Adresse' => 'required|string|max:255',
            'Superficie' => 'required|numeric',
            'Prix' => 'required|numeric',
            'Type_Immobilier' => 'required|string|max:255',
            'Image_URL' => 'nullable|string|max:255',
            'Description' => 'nullable|string',
        ]);

        // Créer une nouvelle propriété dans la base de données
        ImmobilierVendre::create($request->all());

        // Rediriger vers la liste des propriétés avec un message de succès
        return redirect()->route('vendre.index')->with('success', 'Propriété créée avec succès.');
    }
    public function show($id)
    {
        // Trouver la propriété par son ID
        $property = ImmobilierVendre::findOrFail($id);

        // Renvoyer les données à la vue show
        return view('vendre.show', compact('property'));
    }
    public function edit($id)
    {
        // Trouver la propriété par son ID
        $property = ImmobilierVendre::findOrFail($id);

        // Renvoyer les données à la vue edit
        return view('vendre.edit', compact('property'));
    }
    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'Adresse' => 'required|string|max:255',
            'Superficie' => 'required|numeric',
            'Prix' => 'required|numeric',
            'Type_Immobilier' => 'required|string|max:255',
            'Image_URL' => 'nullable|string|max:255',
            'Description' => 'nullable|string',
        ]);

        // Trouver la propriété par son ID
        $property = ImmobilierVendre::findOrFail($id);

        // Mettre à jour les données de la propriété
        $property->update($request->all());

        // Rediriger vers la liste des propriétés avec un message de succès
        return redirect()->route('vendre.index')->with('success', 'Propriété mise à jour avec succès.');
    }
    public function destroy($id)
    {
        // Trouver la propriété par son ID
        $property = ImmobilierVendre::findOrFail($id);

        // Supprimer la propriété
        $property->delete();

        // Rediriger vers la liste des propriétés avec un message de succès
        return redirect()->route('vendre.index')->with('success', 'Propriété supprimée avec succès.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ImmobilierLouer;
use Illuminate\Http\Request;

class ImmobilierLouerController extends Controller
{
    public function index()
    {
        // Récupérer toutes les propriétés de la table immobilier_vendre
        $properties = ImmobilierLouer::all();

        // Renvoyer les données à la vue index pour affichage
        return view('louer.index', compact('properties'));
    }
    public function create()
    {
        return view('louer.create');
    }
    public function store(Request $request)
    {
        // Créer une nouvelle propriété dans la base de données
        $request->validate([
            'Adresse' => 'required|string|max:255',
            'Superficie' => 'required|numeric',
            'Prix' => 'required|numeric',
            'Type_Immobilier' => 'required|string|max:255',
            'Type_Location' => 'required|string|max:255',
            'Image_URL' => 'nullable|string|max:255',
            'Description' => 'nullable|string',
        ]);
        $data = [
            'Adresse' => $request->input('Adresse'),
            'Superficie' => $request->input('Superficie'),
            'Prix' => $request->input('Prix'),
            'Type_Immobilier' => $request->input('Type_Immobilier'),
            'Type_Location' => $request->input('Type_Location'),
            'Image_URL' => $request->input('Image_URL'),
            'Description' => $request->input('Description'),
        ];

        $immobilier_louer = ImmobilierLouer::create($data);

        return redirect()->route('louer.index')->with('success', 'Propriété créée avec succès.');
    }
    public function show($id)
    {
        // Trouver la propriété par son ID
        $property = ImmobilierLouer::findOrFail($id);

        // Renvoyer les données à la vue show
        return view('louer.show', compact('property'));
    }
    public function edit($id)
    {
        // Trouver la propriété par son ID
        $property = ImmobilierLouer::findOrFail($id);

        // Renvoyer les données à la vue edit
        return view('louer.edit', compact('property'));
    }
    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'Adresse' => 'required|string|max:255',
            'Superficie' => 'required|numeric',
            'Prix' => 'required|numeric',
            'Type_Immobilier' => 'required|string|max:255',
            'Type_Location' => 'required|string|max:255',
            'Image_URL' => 'nullable|string|max:255',
            'Description' => 'nullable|string',
        ]);

        // Trouver la propriété par son ID
        $property = ImmobilierLouer::findOrFail($id);

        // Mettre à jour les données de la propriété
        $property->update($request->all());

        // Rediriger vers la liste des propriétés avec un message de succès
        return redirect()->route('louer.index')->with('success', 'Propriété mise à jour avec succès.');
    }
    public function destroy($id)
    {
        // Trouver la propriété par son ID
        $property = ImmobilierLouer::findOrFail($id);

        // Supprimer la propriété
        $property->delete();

        // Rediriger vers la liste des propriétés avec un message de succès
        return redirect()->route('louer.index')->with('success', 'Propriété supprimée avec succès.');
    }
}

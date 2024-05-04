@extends('layouts.app')
<!-- resources/views/immobilier_vendre/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Modifier la propriété</title>
</head>
<body>
    <h1>Modifier la propriété</h1>

    <form action="{{ route('vendre.update', $property->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="Adresse">Adresse :</label>
            <input type="text" name="Adresse" id="Adresse" value="{{ $property->Adresse }}" required>
        </div>
        <div>
            <label for="Superficie">Superficie :</label>
            <input type="number" name="Superficie" id="Superficie" value="{{ $property->Superficie }}" required>
        </div>
        <div>
            <label for="Prix">Prix :</label>
            <input type="number" name="Prix" id="Prix" value="{{ $property->Prix }}" required>
        </div>
        <div>
            <label for="Type_Immobilier">Type d'immobilier :</label>
            <input type="text" name="Type_Immobilier" id="Type_Immobilier" value="{{ $property->Type_Immobilier }}" required>
        </div>
        <div>
            <label for="Image_URL">URL de l'image :</label>
            <input type="text" name="Image_URL" id="Image_URL" value="{{ $property->Image_URL }}">
        </div>
        <div>
            <label for="Description">Description :</label>
            <textarea name="Description" id="Description">{{ $property->Description }}</textarea>
        </div>
        <div>
            <button type="submit">Enregistrer les modifications</button>
        </div>
    </form>
</body>
</html>

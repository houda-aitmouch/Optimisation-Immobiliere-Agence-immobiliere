@extends('layouts.app')
<!-- resources/views/immobilier_vendre/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Créer une nouvelle propriété</title>
</head>
<body>
    <h1>Créer une nouvelle propriété</h1>

    <form action="{{ route('louer.store') }}" method="POST">
        @csrf
        <div>
            <label for="Adresse">Adresse:</label>
            <input type="text" name="Adresse" id="Adresse" required>
        </div>
        <div>
            <label for="Superficie">Superficie:</label>
            <input type="number" name="Superficie" id="Superficie" required>
        </div>
        <div>
            <label for="Prix">Prix:</label>
            <input type="number" name="Prix" id="Prix" required>
        </div>
        <div>
            <label for="Type_Immobilier">Type d'immobilier:</label>
            <input type="text" name="Type_Immobilier" id="Type_Immobilier" required>
        </div>
        <div>
            <label for="Type_Location">Type de location:</label>
            <input type="text" name="Type_Location" id="Type_Location" required>
        </div>
        <div>
            <label for="Image_URL">URL de l'image:</label>
            <input type="text" name="Image_URL" id="Image_URL">
        </div>
        <div>
            <label for="Description">Description:</label>
            <textarea name="Description" id="Description"></textarea>
        </div>
        <div>
            <button type="submit">Créer</button>
        </div>
    </form>
</body>
</html>

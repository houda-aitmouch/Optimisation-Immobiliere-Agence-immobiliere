@extends('layouts.app')
<!-- resources/views/immobilier_vendre/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Détails de la propriété</title>
</head>
<body>
    <h1>Détails de la propriété</h1>

    <p>Adresse : {{ $property->Adresse }}</p>
    <p>Superficie : {{ $property->Superficie }}</p>
    <p>Prix : {{ $property->Prix }}</p>
    <p>Type d'immobilier : {{ $property->Type_Immobilier }}</p>
    <p>URL de l'image : {{ $property->Image_URL }}</p>
    <p>Description : {{ $property->Description }}</p>

    <!-- Lien pour revenir à la liste des propriétés -->
    <a href="{{ route('vendre.index') }}">Retour à la liste des propriétés</a>
</body>
</html>

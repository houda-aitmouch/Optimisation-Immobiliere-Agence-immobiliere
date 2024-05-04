@extends('layouts.app')
<!-- resources/views/vendre/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Liste des propriétés</title>
</head>
<body>
    <h1>Liste des propriétés à vendre</h1>

    <!-- Ajouter un lien pour créer une nouvelle propriété -->
    <a href="{{ route('vendre.create') }}">Ajouter une nouvelle propriété</a>

    <!-- Afficher la liste des propriétés -->
    <ul>
        @foreach ($properties as $property)
            <li>
                <a href="{{ route('vendre.show', $property->id) }}">
                    {{ $property->Adresse }} - {{ $property->Type_Immobilier }}
                </a>
                <!-- Ajouter des liens pour éditer ou supprimer la propriété -->
                <a href="{{ route('vendre.edit', $property->id) }}">Modifier</a>
                <form action="{{ route('vendre.destroy', $property->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>

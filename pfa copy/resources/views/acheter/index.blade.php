<!-- resources/views/immobilier_acheter/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Liste des propriétés à acheter</title>
</head>
<body>
    <h1>Liste des propriétés à acheter</h1>

    <!-- Afficher la liste des propriétés -->
    <ul>
        @foreach ($properties as $property)
            <li>
                <a href="{{ route('acheter.show', $property->id) }}">
                    {{ $property->Adresse }} - {{ $property->Type_Immobilier }}
                </a>
                <!-- Lien pour éditer ou supprimer la propriété -->

            </li>
        @endforeach
    </ul>
</body>
</html>

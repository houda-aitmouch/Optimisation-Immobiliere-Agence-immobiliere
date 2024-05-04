<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImmobilierAcheter extends Model
{
    use HasFactory;

    // Définir les champs autorisés pour les opérations CRUD
    protected $fillable = [
        'Adresse',
        'Superficie',
        'Prix',
        'Type_Immobilier',
        'Image_URL',
        'Description',
    ];
}
?>
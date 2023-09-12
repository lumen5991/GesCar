<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $fillable = [
        'nom_voiture',
        'boite_vitesse',
        'puissance',
        'nbre_porte',
        'caburant',
        'nbre_cylindre',
        'soupape',
        'vitesse_max',
        'carosserie',
        'transmission',
        'frein',
        'acceleration',
        'couleur',
        'image_principale',
        'image_2',
        'image_3',
        'modele'
    ];

    protected $table = "voiture";
}

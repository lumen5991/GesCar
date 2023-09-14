<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{   
    public function cars(){
        return view('carManagement.cars');
    }

    public function addcar(){
        return view('carManagement.addcar');
    }

    public function see_all_voiture()
    {
        $voiture = Voiture::all();
    }

    public function add_voiture(Request $request)
    {
        $data = $request->all();
        $request->validate([
            "nom_voiture" => "required",
            "boite_vitesse" => "required",
            "puissance" => "required",
            "nbre_porte" => "required",
            "carburant" => "required",
            "nbre_cylindre" => "required",
            "soupape" => "required",
            "vitesse_max" => "required",
            "carosserie" => "required",
            "transmission" => "required",
            "frein" => "required",
            "acceleration" => "required",
            "couleur" => "required",
            "image" => "required",
            "image_2" => "required",
            "image_3" => "required",
            "modele" => "required"
        ]);

        if ($data['image']) {
            $photo = $data['image'];
            $path_1 = $photo->store('image_principale');
        };
        if ($data['image_2']) {
            $photo = $data['image_2'];
            $path_2 = $photo->store('image_secondaire');
        };
        if ($data['image_3']) {
            $photo = $data['image_3'];
            $path_3 = $photo->store('image_tertiaire');
        };

        $save = $request->validate([
            "nom_voiture" => $data['nom_voiture'],
            "boite_vitesse" => $data['boite_vitesse'],
            "puissance" => $data['puissance'],
            "nbre_porte" => $data['nbre_porte'],
            "carburant" => $data['carburant'],
            "nbre_cylindre" => $data['nbre_cylindre'],
            "soupape" => $data['soupape'],
            "vitesse_max" => $data['vitesse_max'],
            "carosserie" => $data['carosserie'],
            "transmission" => $data['transmission'],
            "frein" => $data['frein'],
            "acceleration" => $data['acceleration'],
            "couleur" => $data['couleur'],
            "image" => $path_1,
            "image_2" => $path_2,
            "image_3" => $path_3,
            "modele" => $data['modele']
        ]);
    }
}

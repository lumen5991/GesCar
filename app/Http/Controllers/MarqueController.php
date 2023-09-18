<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MarqueController extends Controller
{
    //
    public function brand() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        $category = Categorie::all();
        return view('carManagement.brand', compact('nom', 'prenom', 'category'));
    }

    public function send_brand(Request $request){
        $data = $request->all();
        $request->validate([
            "name" => 'required',
            "category_id" => 'required'
        ]);

        $save = Marque::create([
            'name' => $data['name'],
            'categorie_id' => $data['category_id']
        ]);

        return redirect()->route('cars')->with('success', 'Nouvelle ajoutée avec succès');
    }

    public function modifyBrand() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('carManagement.modifyBrand', compact('nom', 'prenom'));
    }

    public function brand_modify(){
        
    }
}

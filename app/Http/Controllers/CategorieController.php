<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function see_categorie(){
        $categorie = Categorie::all();
    }

    public function send_categorie(Request $request){
        $data = $request->all();
        $request->validate([
            "name" => "required"
        ]);

        $save = Categorie::create([
            "name" => $data['name']
        ]);
    }
}

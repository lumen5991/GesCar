<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MarqueController extends Controller
{
    //
    public function brand() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('carManagement.brand', compact('nom', 'prenom'));
    }

    public function modifyBrand() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('carManagement.modifyBrand', compact('nom', 'prenom'));
    }
}

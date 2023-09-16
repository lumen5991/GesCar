<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModeleController extends Controller
{
    //

    public function model() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('carManagement.model', compact('nom', 'prenom'));
    }


    public function modifyModel() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('carManagement.modifyModel', compact('nom', 'prenom'));
    }
}

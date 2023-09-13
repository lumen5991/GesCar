<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{   
    public function customers(){
        return view('interfaces.customers');
    }

    public function addcusto(){
        return view('interfaces.addcusto');
    }

    public function modifycusto(){
        return view('interfaces.modifycusto');
    }

    public function see_client(){
        $client = Client::all();
    }

    public function send_client(Request $request){
        $data = $request->all();

        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required",
            "adresse" => "required",
            "photo" => "required",
            "cni" => "required",
            "tel" => "tel"
        ]);

        if ($data['photo']) {
            $photo = $data['photo'];
            $path = $photo->store('photo');
        };

        $save = Client::create([
            "nom" => $data['nom'],
            "prenom" => $data['prenom'],
            "tel" => $data['tel'],
            "adresse" => $data['adresse'],
            "photo" => $path,
            "cni" => $data['cni'],
            "email" => $data['email']
        ]);
    }
}

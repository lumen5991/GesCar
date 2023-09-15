<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{   
    public function customers(){
        return view('customerManagement.customers');
    }

    public function addcusto(){
        return view('customerManagement.addcusto');
    }

    public function modifycusto(){
        return view('customerManagement.modifycusto');
    }

    public function see_client(){
        $client = Client::all();
       /*  dd($client); */
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('interfaces.modifycusto', compact('nom', 'prenom'));
    }


   public function addStudent()
   {
      return view('addetudiant');
   }

   public function add($id_client)
   {
      $student = Client::all();
      $data = Client::find($id_client);
      return view('addetudiant', compact('id_client', 'data', 'student'));
   }

    public function send_client(Request $request){
        $data = $request->all();

        $validate = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required",
            "adresse" => "required",
            "photo" => "required",
            "cni" => "required",
            "tel" => "required"
        ]);
        
    /*     if ($data['photo']) {
            $photo = $data['photo'];
            $path = $photo->store('photo');
        }; */

        $save = Client::create([
            "nom" => $data['nom'],
            "prenom" => $data['prenom'],
            "tel" => $data['tel'],
            "adresse" => $data['adresse'],
            "photo" => $data['photo']->store('photo'),
            "cni" => $data['cni'],
            "email" => $data['email']
        ]);
        return redirect()->route('see_customers')->with('message', 'Nouvel ajout efféctué !');
    }


   public function getStudentInfo($id_client){
    $studentInfo = Client::all();
    $data = Client::where('id_client', $id_client)->first();
   /*  dd($data); */
    return view('addetudiant', compact('data', 'id_client'));
 }

 public function modifyStudentInfo(Request $request, $id_client){
    $data = $request->all();
    if($data['photo']){
       $photo = $data['photo'];
       $path = $photo->store('photo');
    };
    Client::where('id_client',$id_client)->update([
        "nom" => $data['nom'],
        "prenom" => $data['prenom'],
        "tel" => $data['tel'],
        "adresse" => $data['adresse'],
        "photo" => $path,
        "cni" => $data['cni'],
        "email" => $data['email'] 
    ]);
 /*    $validation = $request->validate([
       "name" => "required",
       "surname" => "required",
       "speciality" => "required",
       "birthday" => "required",
       "hobbies" => "required",
       "bio" => "required",
       "photo" => "required",
    ]); */

   return redirect()->route('see_customers')->with('message', 'Modification effectuée !');
 }
}

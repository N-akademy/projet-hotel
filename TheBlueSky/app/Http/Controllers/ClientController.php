<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Room;
use App\Client;
use Validator;

class ClientController extends Controller
{
    // Pour accéder à la page show.blade.php
    public function showClients()
    {
        $users= User::all();
        $rooms=Room::all();
        $clients=Client::All();
        return view('Visiteur.show',compact('clients','users','rooms'));
    }
    //Pour acceder à la page create.blade.php
    public function create()
    {
        
        return view('Visiteur.create');
    }
    
    // Pour recupérer les données dans la base de données
    public function store(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'firstname' => 'required|max:50|string',
            'houseAdress' => 'required|string|max:50',
            'postalCode' => 'required|integer|max:4',
            'phone'=>'require|integer|max:10',
            
        ]);

        if ($validator->fails()) {
            return redirect('createClient')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // On se crée un objet de type client qui utilisera l'hydratation
            $client = new client([
                "name" => $request->name,
                "firstname" => $request->firstname,
                "houseAdress" => $request->houseAdress,
                "postalCode" => $request->postalCode,
                "phone"=>$request->phone,
              
                
            ]);

            // Hydratation en base de données et donc insertion d'un employé
            $client->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('/client');
        }
    }

    // Pour accéder à la page edit.blade.php
    public function edit($id)
    {
       
        $client= client::find($id);

        return view('Visiteur.edit',compact('client'));

    }

    // Pour modifier les valeurs dans la base de données
    public function update(Request $request, $id)
    {

        $client= client::find($id);
       
        $client->name = $request->name;
        $client->firstname = $request->firstname;
        $client->houseAdress = $request->houseAdress;
        $client->postalCode = $request->postalCode;
        $client->phone= $request->phone;
        

        $client->save();

        return redirect('/client');
    }

    //Pour Supprimer un Employée
    public function delete($id)
    {
        $client= client::find($id);
        $client->delete();


        return redirect('/client');

    }
}

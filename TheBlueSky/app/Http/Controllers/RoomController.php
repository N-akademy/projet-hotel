<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Room;

class RoomController extends Controller
{
    // Pour accéder à la page show.blade.php
    
    public function showRooms()
    {
        $rooms=Room::All();
        return view('Room.show',compact('rooms'));
    }

    //Pour acceder à la page create.blade.php
    public function create()
    {
        
        return view('Room.create');
    }

    // Pour recupérer les données dans la base de données
    public function store(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'numberRoom' => 'required|integer',
            'prices' => 'required|integer',
            'type' => 'required|string|max:50',
            
        ]);

        if ($validator->fails()) {
            return redirect('Room.create')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // On se crée un objet de type room qui utilisera l'hydratation
            $room = new Room([
                "name" => $request->name,
                "numberRoom" => $request->numberRoom,
                "prices" => $request->prices,
                "type" => $request->type,
                
            ]);

            // Hydratation en base de données et donc insertion de la chambre
            $room->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('/rooms');
        }
    }

    // Pour accéder à la page edit.blade.php
    public function edit($id)
    {
       
        $room= Room::find($id);

        return view('Room.edit',compact('room'));

    }

    // Pour modifier les valeurs dans la base de données
    public function update(Request $request, $id)
    {

        $room= Room::find($id);
        $room->name = $request->name;
        $room->numberRoom = $request->numberRoom;
        $room->prices = $request->prices;
        $room->type = $request->type;
        

        $room->save();

        return redirect('/rooms');
    }

    //Pour Supprimer une Chambre
    public function delete($id)
    {
        $room= Room::find($id);
        $room->delete();


        return redirect('/rooms');

    }
}

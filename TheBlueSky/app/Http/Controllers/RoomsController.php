<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Rooms;

class RoomsController extends Controller
{
    public function showRooms()
    {
        $rooms=Room::All();
        return view('rooms.show',compact('rooms'));
    }

    //public function create()
    //{
    //    $genre=Genre::All();
    //    return view('rooms.create',compact('genre'));
    //}

    public function store(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'numberRoom' => 'required|max:50|string',
            'prices' => 'required|integer',
            'type' => 'required|integer|max:4',
            
        ]);

        if ($validator->fails()) {
            return redirect('createroom')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // On se crée un objet de type room qui utilisera l'hydratation
            $room = new room([
                "name" => $request->name,
                "numberRoom" => $request->numberRoom,
                "prices" => $request->prices,
                "type" => $request->type,
                
            ]);

            // Hydratation en base de données et donc insertion du film
            $room->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('/rooms');
        }
    }


    public function edit($id)
    {
       
        $room= Room::find($id);

        return view('rooms.edit',compact('room'));

    }

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
    public function delete($id)
    {
        $room= Room::find($id);
        $room->delete();


        return redirect('/rooms');

    }
}

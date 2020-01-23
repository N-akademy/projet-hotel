<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    // Pour accéder à la page show.blade.php
    public function showStaff()
    {
        $staffs=Staff::All();
        return view('staff.show',compact('staff'));
    }

    
    // Pour recupérer les données dans la base de données
    public function store(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'firstname' => 'required|max:50|string',
            'prices' => 'required|integer',
            'type' => 'required|integer|max:4',
            
        ]);

        if ($validator->fails()) {
            return redirect('createStaff')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // On se crée un objet de type staff qui utilisera l'hydratation
            $staff = new Staff([
                "name" => $request->name,
                "numberstaff" => $request->numberstaff,
                "prices" => $request->prices,
                "type" => $request->type,
                
            ]);

            // Hydratation en base de données et donc insertion d'un employé
            $staff->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('/staff');
        }
    }

    // Pour accéder à la page edit.blade.php
    public function edit($id)
    {
       
        $staff= Staff::find($id);

        return view('staffs.edit',compact('staff'));

    }

    // Pour modifier les valeurs dans la base de données
    public function update(Request $request, $id)
    {

        $staff= Staff::find($id);
        $staff->name = $request->name;
        $staff->numberstaff = $request->numberstaff;
        $staff->prices = $request->prices;
        $staff->type = $request->type;
        

        $staff->save();

        return redirect('/staff');
    }

    //Pour Supprimer un Employée
    public function delete($id)
    {
        $staff= Staff::find($id);
        $staff->delete();


        return redirect('/staff');

    }
}

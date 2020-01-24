<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Room;
use App\User;
use App\Staff;

class StaffController extends Controller
{
    // Pour accéder à la page show.blade.php
    public function showStaffs()
    {
        $staffs= Staff::All();
        $users= User::all();
        $rooms= Room::all();
       
        return view('Staff.show',compact('staffs','users','rooms'));
    }


    //Pour acceder à la page create.blade.php
    public function create()
    {
        
        return view('Staff.create');
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
            'salary' => 'required|integer|max:4',
        ]);

        if ($validator->fails()) {
            return redirect('createStaff')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // On se crée un objet de type staff qui utilisera l'hydratation
            $staff = new Staff([
                "name" => $request->name,
                "firstname" => $request->firstname,
                "houseAdress" => $request->houseAdress,
                "postalCode" => $request->postalCode,
                "phone"=>$request->phone,
                "salary"=>$request->salary,
                
            ]);

            // Hydratation en base de données et donc insertion d'un employé
            $staff->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('/staffs');
        }
    }

    // Pour accéder à la page edit.blade.php
    public function edit($id)
    {
       
        $staff= Staff::find($id);

        return view('Staff.edit',compact('staff'));

    }

    // Pour modifier les valeurs dans la base de données
    public function update(Request $request, $id)
    {

        $staff= Staff::find($id);
       
        $staff->name = $request->name;
        $staff->firstname = $request->firstname;
        $staff->houseAdress = $request->houseAdress;
        $staff->postalCode = $request->postalCode;
        $staff->phone= $request->phone;
        $staff->salary= $request->salary;

        $staff->save();

        return redirect('/staffs');
    }

    //Pour Supprimer un Employée
    public function delete($id)
    {
        $staff= Staff::find($id);
        $staff->delete();


        return redirect('/staffs');

    }
}

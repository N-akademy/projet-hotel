<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Room;
use App\User;
use App\Staff;


class UserController extends Controller
{
  
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUsers()
    {
        $users=User::All();
        return view('user.show',compact('users'));
    }
    
    
     public function showOneClient($id)
    {
        $user=User::find($id);

       return view('spaceClient', compact('user'));
    }
    
    
    public function showAdmin()
    {
        $users= User::all();
        $rooms=Room::all();
        $staffs=Staff::all();
        return view('spaceGerant', compact('users','rooms', 'staffs'));
    }
    
    public function create()
    {
        return view('createUser');
    }
    public function store(Request $request)
    {
        $user = new User([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => bscript($request->password),
            'role'=>$request->role,
            'avatar'=>$request->avatar,
            ]);
            $user->save();
            return redirect('/homeAdmin');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);    
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = bscript($request->password);
        $user->role=$request->role;
        $user->avatar=$request->avatar; 
        $user->save();
        return redirect('/');
    }
    public function edit($id)
    {
        $user=User::find($id);
        return view('editUser',compact('user'));
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/');
    }
}


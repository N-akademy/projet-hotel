@extends('layouts.template')

@section('content')




<h1>Changement des renseignement sur les Employées</h1>

<form action="{{route('updateStaff',$staff->id)}}" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name"  />

    <label for="numberstaff">Numéro de Chambre<span class="required">*</span></label>
    <input type="number" name="numberstaff"  />


    <label for="prices">Prix pour une nuit<span class="required">*</span></label>
    <input type="number" name="prices"  />


    <label for="type">Type<span class="required">*</span></label>
    <input type="text" name="type"  />


    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" value="{{$staff->name}}" />

    <label for="firstname">Prénom<span class="required">*</span></label>
    <input type="text" name="firstname" value="{{$staff->firstname}}" />


    <label for="houseAdress">Adresse<span class="required">*</span></label>
    <input type="text" name="houseAdress" value="{{$staff->houseAdress}}" />


    <label for="postalCode">Code Postal<span class="required">*</span></label>
    <input type="number" name="postalCode" value="{{$staff->postalCode}}" />

    <label for="phone">Numéro de téléphone<span class="required">*</span></label>
    <input type="number" name="phone" value="{{$staff->phone}}" />

    <label for="salary">Salaire<span class="required">*</span></label>
    <input type="number" name="salary" value="{{$staff->salary}}" />

    <label for="email">Mail<span class="required">*</span></label>
    <input type="email" name="email" value="{{$staff->email}}" />
    
    <label for="role">Role<span class="required">*</span></label>
    <select  name="role_id" />
        @foreach ($role as $role)
        @if($role->name==$staff->role->name)
            <option selected value="{{$role->id}}">{{$role->name}}</option>
        @else
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endif
        @endforeach
    </select>
        <br>


    <input type="submit" value="Ajouter" />


    </form>




@endsection
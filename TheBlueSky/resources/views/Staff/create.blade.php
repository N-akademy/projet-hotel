@extends('layouts.template')

@section('content')




<h1>Ajouter des employées</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="/storeStaff" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" placeholder="Nom" />

    <label for="firstname">Prénom<span class="required">*</span></label>
    <input type="text" name="firstname" placeholder="Prénom" />


    <label for="houseAdress">Adresse<span class="required">*</span></label>
    <input type="text" name="houseAdress" placeholder="Adresse" />


    <label for="postalCode">Code Postal<span class="required">*</span></label>
    <input type="number" name="postalCode" placeholder="Code postal" />

    <label for="phone">Numéro de téléphone<span class="required">*</span></label>
    <input type="number" name="phone" placeholder="numéro de téléphone" />

    <label for="salary">Salaire<span class="required">*</span></label>
    <input type="number" name="salary" placeholder="Salaire en euros" />

    <label for="email">Mail<span class="required">*</span></label>
    <input type="email" name="email" placeholder="Adresse mail" />
    
    <label for="password">Mot de passe<span class="required">*</span></label>
    <input type="password" name="password" placeholder="Mot de passe" />
    
    <label for="role">Role<span class="required">*</span></label>
    <select  name="role_id"/>
        @foreach ($role as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
    </select>
    <br>


    <input type="submit" value="Ajouter" />


    </form>
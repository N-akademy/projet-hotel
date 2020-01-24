@extends('layouts.template')

@section('content')




<h1>Changement des renseignement sur les Employées</h1>

<form action="{{route('updateStaff',$staff->id)}}" method="POST">
    @csrf
<div class="addSection"></div>
    

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Nom <span class="required">*</span></label>
        <input type="text"name="name" value="{{$staff->name}}" />
    </div>
    <div class="form-group col-md-6">
        <label for="firstname">Prénom<span class="required">*</span></label>
        <input type="text" name="firstname" value="{{$staff->firstname}}" />
    </div>
    <div class="form-group col-md-6">
        <label for="houseAdress">Adresse<span class="required">*</span></label>
        <input type="text" name="houseAdress" value="{{$staff->houseAdress}}" />
    </div>
    <div class="form-group col-md-6">
        <label for="postalCode">Code Postal<span class="required">*</span></label>
        <input type="number" name="postalCode" value="{{$staff->postalCode}}" />
    </div>
    <div class="form-group col-md-6">
        <label for="phone">Numéro de téléphone<span class="required">*</span></label>
        <input type="number" name="phone" value="{{$staff->phone}}" />
    </div>
    <div class="form-group col-md-6">
        <label for="salary">Salaire<span class="required">*</span></label>
        <input type="number" name="salary" value="{{$staff->salary}}" />
    </div>
    <input type="submit" value="Modifier" />


    </form>




@endsection
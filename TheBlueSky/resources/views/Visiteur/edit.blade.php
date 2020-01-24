@extends('layouts.template')

@section('content')


<h1>Formulaire de modification</h1>



<form action="{{route('updateClient',$client->id)}}" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" value="{{$client->name}}" />

    <label for="firstname">Prénom<span class="required">*</span></label>
    <input type="text" name="firstname" value="{{$client->firstname}}" />


    <label for="houseAdress">Adresse<span class="required">*</span></label>
    <input type="text" name="houseAdress" value="{{$client->houseAdress}}" />


    <label for="postalCode">Type<span class="required">*</span></label>
    <input type="number" name="postalCode" value="{{$client->postalCode}}" />


    <label for="phone">Téléphone<span class="required">*</span></label>
    <input type="number" name="phone" value="{{$client->phone}}" />
        <br>


    <input type="submit" value="Modifier" />


    </form>




@endsection
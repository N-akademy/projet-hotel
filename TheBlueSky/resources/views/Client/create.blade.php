@extends('layouts.template')

@section('content')




<h1>Création de chambres</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="/storeRoom" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" placeholder="Nom" />

    <label for="numberRoom">Numéro de Chambre<span class="required">*</span></label>
    <input type="number" name="numberRoom" placeholder="Numéro de Chambre" />


    <label for="prices">Prix pour une nuit<span class="required">*</span></label>
    <input type="number" name="prices" placeholder="Prix en euros" />


    <label for="type">Type<span class="required">*</span></label>
    <input type="text" name="type" placeholder="Type" />

    
    <br>


    <input type="submit" value="Ajouter" />


    </form>
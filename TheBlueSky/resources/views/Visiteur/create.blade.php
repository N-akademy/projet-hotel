@extends('layouts.template')

@section('content')




<h1>Formulaire d'ajout de clients</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="/storeClient" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group">
            <label for="name">Nom <span class="required">*</span></label>
            <input type="text"name="name" placeholder="Nom" />
        </div>
        <div class="form-group">
            <label for="firstname">Prénom<span class="required">*</span></label>
            <input type="text" name="firstname" placeholder="Prénom" />
        </div>
        <div class="form-group">
            <label for="houseAdress">Adresse<span class="required">*</span></label>
            <input type="text" name="houseAdress" placeholder="Adresse" />
        </div>
        <div class="form-group">
            <label for="postalCode">Code Postale<span class="required">*</span></label>
            <input type="number" name="postalCode" placeholder="Code Postal" />
        </div>
        <div class="form-group">
            <label for="phone">Télephone<span class="required">*</span></label>
            <input type="number" name="phone" placeholder="Télephone" />
        </div>
    
    <br>


    <input type="submit" value="Ajouter" />


    </form>
    @endsection
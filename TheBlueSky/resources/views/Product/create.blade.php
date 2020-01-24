@extends('layouts.template')

@section('content')




<h1>Création des produits</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="/storeProduct" method="POST">
    @csrf
<div class="form-row">
    <div class="form-group">
        <label for="name">Nom <span class="required">*</span></label>
        <input type="text"name="name" placeholder="Nom" />
    </div>
    <div class="form-group">
        <label for="prices">Prix<span class="required">*</span></label>
        <input type="number" name="prices" placeholder="Prix en euros" />
    </div>

    
    
    <br>


    <input type="submit" value="Ajouter" />


    </form>

    @endsection
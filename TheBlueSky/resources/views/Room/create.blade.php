@extends('layouts.template')

@section('content')



<div class="container">
<h1>Création de chambres</h1>
<br>
<p>Pour Ajouter des chambres suite aux travaux de rénovations</p>
<br><br>
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
<div class="form-row">
    <div class="form-group">
        <label for="name">Nom <span class="required">*</span></label>
        <input type="text"name="name" placeholder="Nom" />
    </div>

    <div class="form-group col-md-6">
        <label for="numberRoom">Numéro de Chambre<span class="required">*</span></label>
        <input type="number" name="numberRoom" placeholder="Numéro de Chambre" />
    </div>
    <div class="form-group">
        <label for="prices">Prix pour une nuit<span class="required">*</span></label>
        <input type="number" name="prices" placeholder="Prix en euros" />
    </div>
    <div class="form-group col-md-6">
        <label for="type">Type<span class="required">*</span></label>
        <input type="text" name="type" placeholder="Type" />
    </div>
</div>

    <input type="submit" class="btn btn-primary" value="Ajouter" />
</form><br>
</div>
<br>
@endsection    
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
    <div class="form-row">
        <div class="form-group">
        <label for="name">Nom <span class="required">*</span></label>
        <input type="text"name="name" placeholder="Nom" />
    </div>
    <div class="form-group col-md-6">
        <label for="firstname">Prénom<span class="required">*</span></label>
        <input type="text" name="firstname" placeholder="Prénom" />
    </div>
    <div class="form-group">
        <label for="houseAdress">Adresse<span class="required">*</span></label>
        <input type="text" name="houseAdress" placeholder="Adresse" />
    </div>
    <div class="form-group col-md-6">
        <label for="postalCode">Code Postal<span class="required">*</span></label>
        <input type="number" name="postalCode" placeholder="Code postal" />
    </div>
    <div class="form-group">
        <label for="phone">Numéro de téléphone<span class="required">*</span></label>
        <input type="number" name="phone" placeholder="numéro de téléphone" />
    </div>
    <div class="form-group col-md-6">
        <label for="salary">Salaire<span class="required">*</span></label>
        <input type="number" name="salary" placeholder="Salaire en euros" />
    </div>
</div>
    <br>


    <input type="submit" value="Ajouter" />


    </form>
@endsection
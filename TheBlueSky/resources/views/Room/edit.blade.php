@extends('layouts.template')

@section('content')




<h1>Modification des Chambres</h1>
<p>Pour modifier les chambres apres les travaux</p>


<form action="{{route('updateRoom',$room->id)}}" method="POST">
    @csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Nom <span class="required">*</span></label>
        <input type="text"name="name" value="{{$room->name}}" />
    </div>

    <div class="form-group col-md-6">
        <label for="numberRoom">Numéro de Chambre<span class="required">*</span></label>
        <input type="number" name="numberRoom" value="{{$room->numberRoom}}" />
    </div>
    <div class="form-group col-md-6">
        <label for="prices">Prix pour une nuit<span class="required">*</span></label>
        <input type="number" name="prices" value="{{$room->pricez}}" />
    </div>
    <div class="form-group col-md-6">
        <label for="type">Type<span class="required">*</span></label>
        <input type="text" name="type" value="{{$room->type}}" />
    </div>
</div>

    <input type="submit" class="btn btn-primary" value="Ajouter" />
</form><br>
</div>
<br>


@endsection
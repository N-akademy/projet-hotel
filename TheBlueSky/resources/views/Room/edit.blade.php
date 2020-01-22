@extends('layouts.template')

@section('content')




<h1>Modification des Chambres</h1>

<form action="{{route('updateRoom',$room->id)}}" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" value="{{$room->name}}" />

    <label for="numberRoom">Numéro de Chambre<span class="required">*</span></label>
    <input type="number" name="numberRoom" value="{{$room->numberRoom}}" />


    <label for="prices">Prix pour une nuit<span class="required">*</span></label>
    <input type="number" name="prices" value="{{$room->prices}}" />


    <label for="type">Type<span class="required">*</span></label>
    <input type="text" name="type" value="{{$room->type}}" />
    <br>


    <input type="submit" value="Ajouter" />


    </form>




@endsection
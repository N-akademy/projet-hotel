@extends('layouts.template')

@section('content')




<h1>Modification des Produits</h1>

<form action="{{route('updateProduct',$product->id)}}" method="POST">
    @csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Nom <span class="required">*</span></label>
        <input type="text"name="name" value="{{$product->name}}" />
    </div>
    <div class="form-group col-md-6">
        <label for="prices">Prix <span class="required">*</span></label>
        <input type="number" name="prices" value="{{$product->prices}}" />
    </div>
        <br>


    <input type="submit" value="Ajouter" />


    </form>




@endsection
@extends('layouts.template')

@section('content')




<h1>Catalogue</h1>


<table class="table table-bordered">
    <thead class="thead-light">    
        <tr>
            <th>Nom</th>
            <th>Prix</th>
    @if(Auth::check())
        @if(Auth::user()->role=='Gérant')
            <th>Modifier</th>
            <th>Supprimer</th>
        @endif 
    @endif
        
        </tr>
    </thead>
    @foreach ($products as $product )
        <tr>
            
            <td>{{ $product->name }}</td>
            <td>{{ $product->prices }}</td>
           
            @if(Auth::check())
                @if(Auth::user()->role=='Gérant')
                    <td class="form">
                    <form action="{{route('editProduct',$product->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="product_id" value="{{$product->id}}">
                        <button class="td" type="submit">Modifier</button>
                    </form>
                    </td>
                    <td class="form">
                    <form action="{{route('deleteProduct',$product->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="product_id" value="{{$product->id}}">
                        <button class="td" type="submit">Supprimer</button>
                    </form>
                    </td>
                @endif
            @endif
        </tr>
    @endforeach
</table>
@endsection
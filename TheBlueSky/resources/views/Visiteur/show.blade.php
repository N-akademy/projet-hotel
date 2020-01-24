@extends('layouts.template')

@section('content')




<h1>Clients</h1>

<table>
    <tr>
        
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Code Postal</th>
        <th>Téléphone</th>
        @if(Auth::check())
            @if(Auth::user()->role=='Gérant')
            <th>Modifier</th>
            <th>Supprimer</th>
            @endif
        @endif
        
    </tr>
    @foreach ($clients as $client )
        <tr>
            
            <td>{{ $client->name }}</td>
            <td>{{ $client->firstname}}</td>
            <td>{{ $client->houseAdress }}</td>
            <td>{{ $client->postalCode }}</td>
            <td>{{ $client->phone }}</td>
            @if(Auth::check())
                @if(Auth::user()->role=='Gérant')
                    <td class="form">
                    <form action="{{route('editClient',$client->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="client_id" value="{{$client->id}}">
                        <button class="td" type="submit">Modifier</button>
                    </form>
                    </td>
                    <td class="form">
                    <form action="{{route('deleteClient',$client->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="client_id" value="{{$client->id}}">
                        <button class="td" type="submit">Supprimer</button>
                    </form>
                    </td>
                @endif
            @endif
        </tr>
    @endforeach
</table>



@endsection
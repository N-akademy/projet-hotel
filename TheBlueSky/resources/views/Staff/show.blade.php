@extends('layouts.template')

@section('content')




<h1>Listes des Employées</h1>

<table>
    <tr>
        
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Code Postal</th>
        <th>Téléphone</th>
        <th>Salaire</th>
        <th>Email</th>
        <th>Role</th>

        @if(Auth::check())
            @if(Auth::user()->role=='administator')
            <th>Modifier</th>
            <th>Supprimer</th>
            @endif
        @endif
        
    </tr>
    @foreach ($rooms as $room )
        <tr>
            
            <td>{{ $room->name }}</td>
            <td>{{ $room->firstname }}</td>
            <td>{{ $room->houseAdress }}</td>
            <td>{{ $room->postalCode }}</td>
            <
            
            @if(Auth::check())
                @if(Auth::user()->role=='administator')
                    <td class="form">
                    <form action="{{route('editroom',$room->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="room_id" value="{{$room->id}}">
                        <button class="td" type="submit">Modifier</button>
                    </form>
                    </td>
                    <td class="form">
                    <form action="{{route('deleteroom',$room->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="room_id" value="{{$room->id}}">
                        <button class="td" type="submit">Supprimer</button>
                    </form>
                    </td>
                @endif
            @endif
        </tr>
    @endforeach
</table>
@endsection
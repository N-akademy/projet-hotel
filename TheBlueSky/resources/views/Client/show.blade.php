@extends('layouts.template')

@section('content')




<h1>Chambres</h1>

<table>
    <tr>
        
        <th>Nom</th>
        <th>Numero de Chambre</th>
        <th>Prix</th>
        <th>Type</th>
        
    </tr>
    @foreach ($rooms as $room )
        <tr>
            
            <td>{{ $room->name }}</td>
            <td>{{ $room->director }}</td>
            <td>{{ $room->duration }}</td>
            <td>{{ $room->year }}</td>
            
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
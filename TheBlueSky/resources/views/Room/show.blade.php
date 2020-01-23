@extends('layouts.template')

@section('content')


<h3> Nos Chambres</h1>
<p> Voici les differentes chambres proposées dans notre petit hôtel.</p>



<table class="table">
<thead class="thead-light">    
    <tr>
        <th>Nom</th>
        <th>Numero de Chambre</th>
        <th>Prix</th>
        <th>Type</th>
@if(Auth::check())
    @if(Auth::user()->role=='Admin')
        <th>Modifier</th>
        <th>Supprimer</th>
    @endif 
@else
        <th>Reserver</th>
       
@endif

    </tr>
</thead>    
@foreach ($rooms as $room )
    <tr>
        <td>{{ $room->name }}</td>
        <td>{{ $room->numberRoom }}</td>
        <td>{{ $room->prices }}</td>
        <td>{{ $room->type }}</td>
@if(Auth::check())
    @if(Auth::user()->role=='Admin')       
        <td class="form">
        <form action="{{route('editRoom',$room->id)}}" method="POST">
            @csrf
            <input type="hidden"name="room_id" value="{{$room->id}}">
            <button class="td" type="submit">Modifier</button>
        </form>
        </td>
        <td class="form">
        <form action="{{route('deleteRoom',$room->id)}}" method="POST">
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
<br><br><br>
@endsection
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
@foreach ($staffs as $staff )
    <tr>
            
        <td>{{ $staff->name }}</td>
        <td>{{ $staff->firstname }}</td>
        <td>{{ $staff->houseAdress }}</td>
        <td>{{ $staff->postalCode }}</td>
        <td>{{ $staff->phone}}</td>
        <td>{{ $staff->salary}}</td>
        <td>{{ $staff->email}}</td>
        <td>{{ $staff->role->name}}</td>
@if(Auth::check())
    @if(Auth::user()->role=='administator')
        <td class="form">
            <form action="{{route('editstaff',$staff->id)}}" method="POST">
                @csrf
                <input type="hidden"name="staff_id" value="{{$staff->id}}">
                <button class="td" type="submit">Modifier</button>
            </form>
        </td>
        <td class="form">
            <form action="{{route('deletestaff',$staff->id)}}" method="POST">
                @csrf
                <input type="hidden"name="staff_id" value="{{$staff->id}}">
                <button class="td" type="submit">Supprimer</button>
        </form>
        </td>
    @endif
@endif
        </tr>
@endforeach
</table>








@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        @include('components.dialog')
        <h1>Ordernummer: {{$account->id}}</h1>
        <a href="{{url('/dashboard')}}" class="btn btn-info">Terug naar dashboard</a>
        <a href="{{url('/dashboard/edit/'.$account->id)}}" class="btn btn-primary">Bewerken</a>
        <a class="btn btn-danger" data-toggle="modal" data-target="#warning">Verwijderen</a>
        <hr>
        <table class="table table-striped">
            <tr>
                <th>Naam: </th>
                <td>{{$account->name}}</td>
            </tr>
            <tr>
                <th>E-mailadres: </th>
                <td>{{$account->email}}</td>
            </tr>
            <tr>
                <th>Telefoonnummer: </th>
                <td>{{$account->phone}}</td>
            </tr>
        </table>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        @include('components.dialog')
        <h1>Ordernummer: {{$rep->id}}</h1>
        <a href="{{url('/dashboard')}}" class="btn btn-info">Terug naar dashboard</a>
        <a href="{{url('/dashboard/edit/'.$rep->id)}}" class="btn btn-primary">Bewerken</a>
        <a class="btn btn-danger" data-toggle="modal" data-target="#warning">Verwijderen</a>
        <hr>
        <table class="table table-striped">
            <tr>
                <th>Naam: </th>
                <td>{{$rep->name}}</td>
            </tr>
            <tr>
                <th>E-mailadres: </th>
                <td>{{$rep->email}}</td>
            </tr>
            <tr>
                <th>Telefoonnummer: </th>
                <td>{{$rep->phone}}</td>
            </tr>
            <tr>
                <th>Afbeelding: </th>
                <td>{{$rep->image}}</td>
            </tr>
        </table>
    </div>
@endsection

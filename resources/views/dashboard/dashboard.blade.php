@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>#Ordernummer</th>
                <th>Naam</th>
                <th>E-mailadres</th>
                <th>Telefoonnummer</th>
                <th></th>
            </tr>

            @foreach($reparations as $rep)
            <tr>
                <td>{{$rep->id}}</td>
                <td>{{$rep->name}}</td>
                <td>{{$rep->email}}</td>
                <td>{{$rep->phone}}</td>
                <td><a href="{{url('/details/'.$rep->id)}}">Meer details</a></td>

            </tr>
            @endforeach
        </table>

    </div>
@endsection
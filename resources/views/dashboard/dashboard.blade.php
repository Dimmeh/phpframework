@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
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
                <td><a href="{{url('/dashboard/'.$rep->id)}}" class="btn btn-info">Meer details</a></td>

            </tr>
            @endforeach
        </table>

    </div>
@endsection
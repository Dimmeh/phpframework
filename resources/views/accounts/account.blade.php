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
                <th>#Accountnummer</th>
                <th>Naam</th>
                <th>E-mailadres</th>
                <th>Telefoonnummer</th>
                <th>Rechten</th>
                <th></th>
            </tr>

            @foreach($accounts as $account)
                <tr>
                    <td>{{$account->id}}</td>
                    <td>{{$account->name}}</td>
                    <td>{{$account->email}}</td>
                    <td>{{$account->phone}}</td>
                    <td>{{$account->role}}</td>
                    <td><a href="{{url('/account/'.$account->id)}}" class="btn btn-info">Meer details</a></td>

                </tr>
            @endforeach
        </table>

    </div>
@endsection
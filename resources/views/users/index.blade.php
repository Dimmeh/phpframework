@extends('layouts.master')

@section('content')
    @include('partials.errors')

    <div class="row">
        <div class="col-md-12">
            <p class="quote">My Account <a href="{{route('users.edit', ['id' => Auth::user()->id])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>Adresgegvens</p>
            <ul>
                <li>{{$user->address}}</li>
                <li>{{$user->zipcode}} {{$user->city}}</li>
            </ul>
        </div>
        <div class="col-md-6">
            <p>Account gegevens</p>
            <ul>
                <li>Klantnummer: {{$user->id}}</li>
                <li>{{$user->surname}} {{$user->name}}</li>
                <li>{{$user->email }}</li>
                <li>{{$user->phone }}</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="quote">My Reparations</p>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        @foreach($myReparations as $myReparation)
            <tr>
                <td scope="row">{{$myReparation->id}}</td>
                <td>{{$myReparation->description}}</td>
                <td>{{$myReparation->status}}</td>
            </tr>
        @endforeach
    </table>

@endsection
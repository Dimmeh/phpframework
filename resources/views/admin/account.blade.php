@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
        </tr>
        @foreach($accounts as $account)
        <tr>
            <td scope="row">{{$account->id}}</td>
            <td>{{$account->name}}</td>
            <td>{{$account->role}}</td>
        </tr>
        @endforeach
    </table>

@endsection
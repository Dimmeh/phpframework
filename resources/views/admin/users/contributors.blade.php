@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <h1 class="qoute">All Contributor</h1>
    @if($contributors)
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
            </tr>
            @foreach($contributors as $contributor)
            <tr>
                <td scope="row">{{$contributor->id}}</td>
                <td>{{$contributor->name}}</td>
                <td>{{$contributor->role}}</td>
            </tr>
            @endforeach
        </table>
    @endif
@endsection
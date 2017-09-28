@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <h1 class="qoute">All Customers
        <a href="{{route('admin.users.create')}}">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
    </h1>
    @if($customers)
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
            </tr>
            @foreach($customers as $customer)
                <tr>
                    <td scope="row">{{$customer->id}}</td>
                    <td>{{$customer->surname}} {{$customer->name}}</td>
                    <td>{{$customer->role}}</td>
                </tr>
            @endforeach
        </table>

        <div class="row">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation example">
                    {{ $customers->links() }}
                </nav>
            </div>
        </div>
    @endif
@endsection
@extends('layouts.master')

@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @elseif(Session::has('confirm'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('confirm')}}</p>
            </div>
        </div>
    @endif
    @include('partials.errors')
    <h1 class="qoute">All Reparations
        <a href="{{route('admin.create')}}">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
    </h1>
    <div class="row">
        <div class="col-md-2">
            <p>Filters:</p>
        </div>
        <div class="col-md-10">
            <form action="{{route('admin.reparations')}}">
                <select name="filterReparationStatus">
                    <option selected="selected">-- Select Status --</option>
                    <option value="">All</option>
                    <option value="1">Nieuw</option>
                    <option value="2">Bezig</option>
                    <option value="3">Voltooid</option>
                    <option value="4">Betaald</option>
                </select>

                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
    </div>
    @if($reparations)
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Description</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($reparations as $reparation)
                <tr>
                    <td scope="row">{{$reparation->id}}</td>
                    <td>{{$reparation->surname}} {{$reparation->name}}</td>
                    <td>{{$reparation->email}}</td>
                    <td>{{$reparation->phone}}</td>
                    <td>{{$reparation->description}}</td>
                    @if($reparation->status == 1)
                        <td>Nieuw</td>
                    @elseif($reparation->status == 2)
                        <td>Bezig</td>
                    @elseif($reparation->status == 3)
                        <td>Voltooid</td>
                    @endif
                    <td>
                        <a href="{{route('admin.reparation.edit', ['id' => $reparation->id])}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('admin.delete', ['id' => $reparation->id])}}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Ordernummer: {{$rep->id}}</h1>
        <a href="{{url('/dashboard/'.$rep->id)}}" class="btn btn-info">Terug</a>
        <hr>
        <div class="container">
            <form class="form-horizontal" action="{{url('/dashboard-edit/'.$rep->id)}}" id="reparation" method="post">

                <div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
                    <label for="name" class="col-md-4 control-label">Naam</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" value="{{$rep->name}}" required autofocus >

                        @if ($errors->has('name'))
                            <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                    <label for="email" class="col-md-4 control-label">E-mailadres</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="{{$rep->email}}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{$errors->has('phone') ? ' has-error' : ''}}">
                    <label for="phone" class="col-md-4 control-label"> Telefoonnummer </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="phone" value="{{$rep->phone}}" required>

                        @if ($errors->has('phone'))
                            <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
                    <label for="image">
                        <input type="hidden" class="form-control" name="image" value="example.jpg" required>
                    </label>
                </div>
                {{csrf_field()}}
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Bewerken
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
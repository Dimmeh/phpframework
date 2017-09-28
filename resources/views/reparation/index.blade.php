@extends('layouts.master')
@section('content')
    @include('partials.errors')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif

    <form action="{{route('reparation.create', ['role' => 'guest'])}}" method="post">
        @if(!Auth::check())
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputSurname" class="col-form-label">Voornaam</label>
                <input name="inputSurname" type="text" class="form-control" id="inputSurname" placeholder="Voornaam" value="{{ old('inputSurname') }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputName" class="col-form-label">Achternaam</label>
                <input name="inputName" type="text" class="form-control" id="inputName" placeholder="Achternaam" value="{{ old('inputName') }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmailAddress" class="col-form-label">E-mailadres</label>
                <input name="inputEmailAddress" type="email" class="form-control" id="inputEmailAddress" placeholder="E-mailadres" value="{{ old('inputEmailAddress') }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPhone" class="col-form-label">Telefoonnummer</label>

                <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon">06</div>
                    <input id="inputPhone" type="text" maxlength="8" class="form-control" name="inputPhone" value="{{ old('inputPhone') }}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress" class="col-form-label">Adres</label>
            <input name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="Adres" value="{{ old('inputAddress') }}" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity" class="col-form-label">Plaats</label>
                <input name="inputCity" type="text" class="form-control" id="inputCity" placeholder="Plaats" value="{{ old('inputCity') }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip" class="col-form-label">Postcode</label>
                <input name="inputZip" type="text" maxlength="6" class="form-control" id="inputZip" placeholder="Postcode" value="{{ old('inputZip') }}" required>
            </div>
        </div>
        @else
            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
        @endif
        <div class="form-group">
            <label for="repDescription">Omschrijving reparatie</label>
            <textarea name="repDescription" class="form-control" id="repDescription" rows="3"></textarea>
        </div>

        {{--<div class="form-group">--}}
            {{--<div class="form-check">--}}
                {{--<label class="form-check-label">--}}
                    {{--<input class="form-check-input" type="checkbox"> Maak een account--}}
                {{--</label>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Verzenden</button>
    </form>
@endsection
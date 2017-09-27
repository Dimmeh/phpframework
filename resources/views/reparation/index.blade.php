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

    <form action="{{route('reparation.create')}}" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputSurname" class="col-form-label">Voornaam</label>
                <input name="inputSurname" type="text" class="form-control" id="inputSurname" placeholder="Voornaam">
            </div>
            <div class="form-group col-md-6">
                <label for="inputName" class="col-form-label">Achternaam</label>
                <input name="inputName" type="text" class="form-control" id="inputName" placeholder="Achternaam">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmailAddress" class="col-form-label">E-mailadres</label>
                <input name="inputEmailAddress" type="email" class="form-control" id="inputEmailAddress" placeholder="E-mailadres">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPhone" class="col-form-label">Telefoonnummer</label>
                <input name="inputPhone" type="text" class="form-control" id="inputPhone" placeholder="Telefoonnummer">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress" class="col-form-label">Adres</label>
            <input name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="Adres">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity" class="col-form-label">Plaats</label>
                <input name="inputCity" type="text" class="form-control" id="inputCity" placeholder="Plaats">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip" class="col-form-label">Postcode</label>
                <input name="inputZip" type="text" maxlength="6" class="form-control" id="inputZip" placeholder="Postcode">
            </div>
        </div>
        <div class="form-group">
            <label for="repDescription">Omschrijving reparatie</label>
            <textarea name="repDescription" class="form-control" id="repDescription" rows="3"></textarea>
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Maak een account
                </label>
            </div>
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Verzenden</button>
    </form>
@endsection
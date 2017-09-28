@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <form action="{{route('admin.reparation.edit')}}" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputSurname" class="col-form-label">Voornaam</label>
                <input name="inputSurname" type="text" class="form-control" id="inputSurname" placeholder="Voornaam" value="{{ $reparation['surname'] }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputName" class="col-form-label">Achternaam</label>
                <input name="inputName" type="text" class="form-control" id="inputName" placeholder="Achternaam" value="{{ $reparation['name'] }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmailAddress" class="col-form-label">E-mailadres</label>
                <input name="inputEmailAddress" type="email" class="form-control" id="inputEmailAddress" placeholder="E-mailadres" value="{{ $reparation['email'] }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPhone" class="col-form-label">Telefoonnummer</label>

                <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon">06</div>
                    <input id="inputPhone" type="text" maxlength="8" class="form-control" name="inputPhone" value="{{ $reparation['phone'] }}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress" class="col-form-label">Adres</label>
            <input name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="Adres" value="{{ $reparation['address'] }}" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity" class="col-form-label">Plaats</label>
                <input name="inputCity" type="text" class="form-control" id="inputCity" placeholder="Plaats" value="{{ $reparation['city'] }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip" class="col-form-label">Postcode</label>
                <input name="inputZip" type="text" maxlength="6" class="form-control" id="inputZip" placeholder="Postcode" value="{{ $reparation['zipcode'] }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="repDescription">Omschrijving reparatie</label>
            <textarea name="repDescription" class="form-control" id="repDescription" rows="3">{{ $reparation['description'] }}</textarea>
        </div>
        <div class="form-group">
            <label for="status" class="col-md-4">Status</label>
            <select name="status" value="{{ $reparation['status'] }}" class="form-control col-md-8" id="status">
                <option value="1">Nieuw</option>
                <option value="2">Bezig</option>
                <option value="3">Voltooid</option>
                <option value="4">Betaald</option>
            </select>
        </div>
        <input type="hidden" value="{{$reparation['id']}}" name="id">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Bewerken</button>
    </form>
@endsection


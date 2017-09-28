@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <h1>Hello</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('user.update')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                    <label for="surname" class="col-md-6 control-label">Surname</label>

                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control" name="surname" value="{{$post['surname']}}" required autofocus>

                        @if ($errors->has('surname'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-6 control-label">Name</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{$post['name']}}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{$post['email']}}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone" class="col-md-4 control-label">Phone</label>

                    <div class="col-md-6">
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon">06</div>
                            <input id="phone" type="text" maxlength="8" class="form-control" name="phone" value="{{$post['phone']}}" required>
                        </div>
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="phone" class="col-md-4 control-label">Address</label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control" name="address" value="{{$post['address']}}" required>

                        @if ($errors->has('address'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                    <label for="zipcode" class="col-md-4 control-label">zipcode</label>

                    <div class="col-md-6">
                        <input id="zipcode" type="text" class="form-control" maxlength="6" name="zipcode" value="{{$post['zipcode']}}" required>

                        @if ($errors->has('zipcode'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    <label for="city" class="col-md-4 control-label">City</label>

                    <div class="col-md-6">
                        <input id="city" type="text" class="form-control" name="city" value="{{$post['city']}}" required>

                        @if ($errors->has('city'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
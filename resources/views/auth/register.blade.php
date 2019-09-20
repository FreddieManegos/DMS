@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">First Name</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-2">Last Name</label>

                            <div class="col-md-4">
                                <input id="last_name" type="text" class="form-control" name="last_name"  required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="your_name@email.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-2 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Gender</label>

                            <div class="col-md-2">
                                <select class="form-control" name="gender">
                                    <option value="volvo">Male</option>
                                    <option value="saab">Female</option>
                                </select>
                            </div>
                            <label for="password-confirm" class="col-md-2 ">Birthday</label>

                            <div class="col-md-4">
                                <input type="date" name="birthday" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Religion</label>

                            <div class="col-md-2">
                                <select class="form-control" name="religion">
                                    <option value="volvo">Christian</option>
                                    <option value="saab">Muslim</option>
                                </select>
                            </div>
                            <label for="password-confirm" class="col-md-2 ">Age</label>

                            <div class="col-md-4">
                                <input type="txt" name="age" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">City</label>

                            <div class="col-md-6">
                                <input type="text" name="city" class="form-control">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Address</label>

                            <div class="col-md-6">
                                <input type="text" name="address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

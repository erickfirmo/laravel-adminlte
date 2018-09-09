@extends('admin.layouts.auth')

@section('content')

    <p class="login-box-msg">{{ config('app.name') }} administrator's register</p>

    <form action="{{ route('admin.register') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name" required>
            <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
            
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

        </div>
        <div class="form-group has-feedback{{ $errors->has('lastname') ? ' has-error' : '' }}">
            <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" placeholder="Lastname" required>
            <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
            
            @if ($errors->has('lastname'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif

        </div>
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>        
        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" style="visibility:hidden;" name="terms" {{ old('terms') ? 'checked' : '' }}>
                        &nbsp;&nbsp;&nbsp;I agree to <a target="_blank" href="{{ route('terms') }}">terms of service</a>
                    </label>

                    @if ($errors->has('terms'))
                        <span class="help-block">
                            <strong style="color:#dd4b39;">{{ $errors->first('terms') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <hr>

    <a href="{{ route('admin.login') }}">Already a member?</a><br>

@endsection

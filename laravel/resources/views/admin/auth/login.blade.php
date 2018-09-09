@extends('admin.layouts.auth')

@section('content')

    <p class="login-box-msg">Digite seus dados pra acessar</p>

    <form action="{{ route('admin.login') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            
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
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" style="visibility:hidden;" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        &nbsp;&nbsp;&nbsp;Lembrar Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <hr>
    <a href="{{ route('admin.password.request') }}">Esqueceu sua senha?</a>
    <br>

@endsection

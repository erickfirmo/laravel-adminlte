@extends('admin.layouts.auth')

@section('content')

    <p class="login-box-msg">Digite seu Email</p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('admin.password.email') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>        
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">LINK DE RECUPERAÇÂO DE SENHA VIA EMAIL</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <hr>

@endsection

@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 class="text-center text-900 text-xxxxxl">404</h1>
                <p class="text-center">A página solicitada não foi encontrada.</p>
                <form>
                    <div class="input-group">
                        <input type="search" name="search" placeholder="Pesquisar no site..." class="form-control form-circle"/>
                        <span class="input-group-btn">
                            <button tyle="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection

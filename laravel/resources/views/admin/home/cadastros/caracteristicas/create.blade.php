@extends('admin.layouts.home')
@section('title', 'Nova Caracteristica')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.cadastros.caracteristicas.components.form')
@slot('tiposdeimoveis', $tiposdeimoveis)
@slot('caracteristica', $caracteristica)
{{ Form::open(['route' => 'admin.cadastro.caracteristicas.store', 'method' => 'POST']) }}
@endcomponent
@endsection
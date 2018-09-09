@extends('admin.layouts.home')
@section('title', 'Novo Tipo de Imóvel')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.cadastros.imoveis.tipos.components.form')
@slot('caracteristicas', $caracteristicas)
{{ Form::open(['route' => 'admin.cadastro.imoveis.tipos.store', 'method' => 'POST']) }}
@endcomponent
@endsection
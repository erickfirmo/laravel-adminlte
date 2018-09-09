@extends('admin.layouts.home')
@section('title', 'Novo Contrato')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.cadastros.contratos.components.form')
@slot('inquilinos', $inquilinos)
@slot('tiposdedesconto', $tiposdedesconto)
@slot('imoveis', $imoveis)
{{ Form::open(['route' => 'admin.cadastro.contratos.store', 'method' => 'POST']) }}
@endcomponent
@endsection
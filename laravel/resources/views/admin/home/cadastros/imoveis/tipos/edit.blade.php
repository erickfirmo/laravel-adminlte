@extends('admin.layouts.home')
@section('title', "Editar Tipo de Imóvel")
@section('description', 'Editar')
@section('content')
@component('admin.home.cadastros.imoveis.tipos.components.form')
@slot('tipo', $tipo)
@slot('caracteristicas', $caracteristicas)
{{ Form::model($tipo, ['route' => ['admin.cadastro.imoveis.tipos.update', $tipo->id], 'method' => 'PUT']) }}
@endcomponent
@endsection
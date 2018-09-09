@extends('admin.layouts.home')
@section('title', "Editar Caracteristica")
@section('description', 'Editar')
@section('content')
@component('admin.home.cadastros.caracteristicas.components.form')
@slot('tiposdeimoveis', $tiposdeimoveis)
@slot('caracteristica', $caracteristica)
{{ Form::model($caracteristica, ['route' => ['admin.cadastro.caracteristicas.update', $caracteristica->id], 'method' => 'PUT']) }}
@endcomponent
@endsection
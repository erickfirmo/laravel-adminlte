@extends('admin.layouts.home')
@section('title', "Editar Edificio")
@section('description', 'Editar')
@section('content')
@component('admin.home.cadastros.edificios.components.form')
@slot('ufs', $ufs)
@slot('edificio', $edificio)
{{ Form::model($edificio, ['route' => ['admin.cadastro.edificios.update', $edificio->id], 'method' => 'PUT']) }}
@endcomponent
@endsection
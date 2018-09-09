@extends('admin.layouts.home')
@section('title', 'Novo Edificio')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.cadastros.edificios.components.form')
@slot('ufs', $ufs)
{{ Form::open(['route' => 'admin.cadastro.edificios.store', 'method' => 'POST']) }}
@endcomponent
@endsection
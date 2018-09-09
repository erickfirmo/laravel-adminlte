@extends('admin.layouts.home')
@section('title', 'Novo Imóvel')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.cadastros.imoveis.components.form')
@slot('ufs', $ufs)
@slot('tipos', $tipos)
@slot('edificios', $edificios)
{{ Form::open(['route' => 'admin.cadastro.imoveis.store', 'method' => 'POST']) }}
@endcomponent
@endsection
@extends('admin.layouts.home')
@section('title', 'Nova Despesa')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.cadastros.despesas.components.form')
{{ Form::open(['route' => 'admin.cadastro.despesas.store', 'method' => 'POST']) }}
@endcomponent
@endsection
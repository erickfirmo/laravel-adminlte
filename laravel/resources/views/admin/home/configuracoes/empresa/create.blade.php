@extends('admin.layouts.home')
@section('title', 'Cadastrar Empresa')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.configuracoes.empresa.components.form')
@slot('ufs', $ufs)
{{ Form::open(['route' => 'admin.configuracoes.empresa.store', 'method' => 'POST', 'files' => true]) }}
@endcomponent
@endsection
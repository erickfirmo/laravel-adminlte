@extends('admin.layouts.home')
@section('title', 'Novo Proprietário')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.cadastros.proprietarios.components.form')
@slot('ufs', $ufs)
{{ Form::open(['route' => 'admin.cadastro.proprietarios.store', 'method' => 'POST']) }}
@endcomponent
@endsection
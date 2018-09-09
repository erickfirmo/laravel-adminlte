@extends('admin.layouts.home')
@section('title', 'Novo Inquilino')
@section('description', 'Adicionar')
@section('content')
@component('admin.home.cadastros.inquilinos.components.form')
@slot('ufs', $ufs)
{{ Form::open(['route' => 'admin.cadastro.inquilinos.store', 'method' => 'POST']) }}
@endcomponent
@endsection
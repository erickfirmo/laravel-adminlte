@extends('admin.layouts.home')
@section('title', "Editar Empresa")
@section('description', 'Editar')
@section('content')
@component('admin.home.configuracoes.empresa.components.form')
@slot('empresa', $empresa)
@slot('ufs', $ufs)
{{ Form::model($empresa, ['route' => ['admin.configuracoes.empresa.update', $empresa->id], 'method' => 'PUT', 'files' => true]) }}
@endcomponent
@endsection
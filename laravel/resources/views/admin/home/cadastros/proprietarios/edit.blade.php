@extends('admin.layouts.home')
@section('title', "Editar Proprietário")
@section('description', 'Editar')
@section('content')
@component('admin.home.cadastros.proprietarios.components.form')
{{ Form::model($proprietario, ['route' => ['admin.cadastro.proprietarios.update', $proprietario->id], 'method' => 'PUT']) }}
@endcomponent
@endsection
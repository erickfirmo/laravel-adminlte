@extends('admin.layouts.home')
@section('title', "Editar Despesa")
@section('description', 'Editar')
@section('content')
@component('admin.home.cadastros.despesas.components.form')
{{ Form::model($despesa, ['route' => ['admin.cadastro.despesas.update', $despesa->id], 'method' => 'PUT']) }}
@endcomponent
@endsection
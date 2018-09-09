@extends('admin.layouts.home')
@section('title', "Editar Inquilino")
@section('description', 'Editar')
@section('content')
@component('admin.home.cadastros.inquilinos.components.form')
{{ Form::model($inquilino, ['route' => ['admin.cadastro.inquilinos.update', $inquilino->id], 'method' => 'PUT']) }}
@endcomponent
@endsection
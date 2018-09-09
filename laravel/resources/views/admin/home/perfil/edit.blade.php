@extends('admin.layouts.home')
@section('title', "Meu Perfil")
@section('description', 'Editar')
@section('content')
@component('admin.home.perfil.components.form')
{{ Form::model($user, ['route' => ['admin.perfil.update', $user->id], 'method' => 'PUT']) }}
@endcomponent
@endsection
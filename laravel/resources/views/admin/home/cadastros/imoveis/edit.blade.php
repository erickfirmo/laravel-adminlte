@extends('admin.layouts.home')
@section('title', "Editar Imóvel")
@section('description', 'Editar')
@section('content')
@component('admin.home.cadastros.imoveis.components.form')
@slot('ufs', $ufs)
@slot('tipos', $tipos)
@slot('edificios', $edificios)
{{ Form::model($imovei, ['route' => ['admin.cadastro.imoveis.update', $imovei->id], 'method' => 'PUT']) }}
@endcomponent
@endsection
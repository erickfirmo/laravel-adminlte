@extends('admin.layouts.home')
@section('title', 'Caracteristicas')
@section('description', 'Gerencie suas Caracteristicas')
@section('content')
<div class="box">
   <div class="box-header">
      <a href="{{ route('admin.cadastro.caracteristicas.create') }}" class="btn btn-primary btn-flat pull-right">Adicionar caracteristica</a>
   </div>
   <div class="box-body">
   @include('admin.partials._alert')
      <div class="table-responsive">
         <table id="tabela" class="table table-bordered table-hover datatables">
            <thead>
               <tr>
                  <th>Nome</th>
                  <th>Edificio</th>
                  <th>Imóvel</th>
                  <th>Ação</th>
               </tr>
            </thead>
            <tbody>
               @foreach($caracteristicas as $caracteristica)
               <tr>
                  <td>{{ $caracteristica->nome }}</td>
                  <td>{{ ($caracteristica->edificio == 0) ? 'Não' : 'Sim' }}</td>
                  <td>{{ ($caracteristica->imovel == 0) ? 'Não' : 'Sim' }}</td>
                  <td align="right">
                     <a href="{{ route('admin.cadastro.caracteristicas.show', $caracteristica->id) }}" class="btn btn-default btn-flat btn-xs"><i class="fa fa-eye"></i></a>
                     <a href="{{ route('admin.cadastro.caracteristicas.edit', $caracteristica->id) }}" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i></a>
                     {{ Form::open(['route' => ['admin.cadastro.caracteristicas.destroy', $caracteristica->id], 'method' => 'DELETE', 'id' => 'delete-form', 'onsubmit' => 'deleteForm(this);return false;', 'style' => 'display: inline-block;']) }}
                     <button type="submit" class="btn btn-danger btn-flat btn-xs">
                     <i class="fa fa-trash"></i>
                     </button>                                    
                     {{ Form::close() }}
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

@endsection
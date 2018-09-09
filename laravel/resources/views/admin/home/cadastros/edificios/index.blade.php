@extends('admin.layouts.home')
@section('title', 'Edificio')
@section('description', 'Gerencie Seus Edificios')
@section('content')
<div class="box">
   <div class="box-header">
      <a href="{{ route('admin.cadastro.edificios.create') }}" class="btn btn-primary btn-flat pull-right">Adicionar Edificio</a>
   </div>
   <div class="box-body">
   @include('admin.partials._alert')
      <div class="table-responsive">
         <table id="tabela" class="table table-bordered table-hover datatables">
            <thead>
               <tr>
                  <th>Nome Fantasia</th>
                  <th>Razão Social</th>
                  <th>Cnpj</th>
                  <th>Ação</th>
               </tr>
            </thead>
            <tbody>
               @foreach($edificios as $edificio)
               <tr>
                  <td>{{ $edificio->nome_fantasia }}</td>
                  <td>{{ $edificio->razao_social }}</td>
                  <td>{{ mask($edificio->cnpj,'##.###.###/####-##') }}</td>
                  <td align="right">
                     <a href="{{ route('admin.cadastro.edificios.show', $edificio->id) }}" class="btn btn-default btn-flat btn-xs"><i class="fa fa-eye"></i></a>
                     <a href="{{ route('admin.cadastro.edificios.edit', $edificio->id) }}" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i></a>
                     {{ Form::open(['route' => ['admin.cadastro.edificios.destroy', $edificio->id], 'method' => 'DELETE', 'id' => 'delete-form', 'onsubmit' => 'deleteForm(this);return false;', 'style' => 'display: inline-block;']) }}
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
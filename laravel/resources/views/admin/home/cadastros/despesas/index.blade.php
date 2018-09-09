@extends('admin.layouts.home')
@section('title', 'Despesas')
@section('description', 'Gerencie suas Despesas')
@section('content')
<div class="box">
   <div class="box-header">
      <a href="{{ route('admin.cadastro.despesas.create') }}" class="btn btn-primary btn-flat pull-right">Adicionar despesa</a>
   </div>
   <div class="box-body">
   @include('admin.partials._alert')
      <div class="table-responsive">
         <table id="tabela" class="table table-bordered table-hover datatables">
            <thead>
               <tr>
                  <th>Nome</th>
                  <th>Destacar no Recibo?</th>
                  <th>Ação</th>
               </tr>
            </thead>
            <tbody>
               @foreach($despesas as $despesa)
               <tr>
                  <td>{{ $despesa->nome }}</td>
                  <td>{{ ($despesa->destacar == 0) ? 'Não' : 'Sim' }}</td>
                  <td align="right">
                     <a href="{{ route('admin.cadastro.despesas.show', $despesa->id) }}" class="btn btn-default btn-flat btn-xs"><i class="fa fa-eye"></i></a>
                     <a href="{{ route('admin.cadastro.despesas.edit', $despesa->id) }}" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i></a>
                     {{ Form::open(['route' => ['admin.cadastro.despesas.destroy', $despesa->id], 'method' => 'DELETE', 'id' => 'delete-form', 'onsubmit' => 'deleteForm(this);return false;', 'style' => 'display: inline-block;']) }}
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



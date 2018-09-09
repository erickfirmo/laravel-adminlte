@extends('admin.layouts.home')
@section('title', 'Contratos')
@section('description', 'Gerencie seus Contratos')
@section('content')
<div class="box">
   <div class="box-header">
      <a href="{{ route('admin.cadastro.contratos.create') }}" class="btn btn-primary btn-flat pull-right">Adicionar Contrato</a>
   </div>
   <div class="box-body">
   @include('admin.partials._alert')
      <div class="table-responsive">
         <table id="tabela" class="table table-bordered table-hover datatables">
            <thead>
               <tr>
                  <th>Inquilino</th>
                  <th>Imóvel</th>
                  <th>Inicio</th>
                  <th>Fim</th>
                  <th>Ação</th>
               </tr>
            </thead>
            <tbody>
               @foreach($contratos as $contrato)
               <tr>
                  <td>{{ $contrato->inquilino->nome_fantasia }}</td>
                  <td>{{ $contrato->imovel->endereco->logradouro}}, {{ $contrato->imovel->endereco->numero }}</td>
                  <td>{{ date_br($contrato->vigencia_inicio) }}</td>
                  <td>{{ date_br($contrato->vigencia_final) }}</td>
                  <td align="right">
                    <a href="{{ route('admin.cadastro.contratos.edit', $despesa->id) }}" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i></a>
                     {{ Form::open(['route' => ['admin.cadastro.contratos.destroy', $contrato->id], 'method' => 'DELETE', 'id' => 'delete-form', 'onsubmit' => 'deleteForm(this);return false;', 'style' => 'display: inline-block;']) }}
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



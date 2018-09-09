@extends('admin.layouts.home')
@section('title', 'Imóvel')
@section('description', 'Gerencie seus Imóvels')
@section('content')
<div class="box">
   <div class="box-header">
      <a href="{{ route('admin.cadastro.imoveis.create') }}" class="btn btn-primary btn-flat pull-right">Adicionar imovel</a>
   </div>
   <div class="box-body">
   @include('admin.partials._alert')
      <div class="table-responsive">
         <table id="tabela" class="table table-bordered table-hover datatables">
            <thead>
               <tr>
                  <th>Nome</th>
                  <th>Ação</th>
               </tr>
            </thead>
            <tbody>
               @foreach($imoveis as $imovel)
               <tr>
                  <td>{{ $imovel->nome }}</td>
                  <td align="right">
                     <a href="{{ route('admin.cadastro.imoveis.show', $imovel->id) }}" class="btn btn-default btn-flat btn-xs"><i class="fa fa-eye"></i></a>
                     <a href="{{ route('admin.cadastro.imoveis.edit', $imovel->id) }}" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i></a>
                     {{ Form::open(['route' => ['admin.cadastro.imoveis.destroy', $imovel->id], 'method' => 'DELETE', 'id' => 'delete-form', 'onsubmit' => 'deleteForm(this);return false;', 'style' => 'display: inline-block;']) }}
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
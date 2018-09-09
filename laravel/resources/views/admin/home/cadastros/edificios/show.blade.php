@extends('admin.layouts.home')
@section('title', "Informações do edificio")
@section('description', $edificio->nome)
@section('content')
<div class="box">
   <div class="box-header with-border">
      <h3 class="box-title">{{ $edificio->nome }}</h3>
      <div class="box-tools pull-right">
         <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
         <i class="fa fa-minus"></i></button>
      </div>
   </div>
   <div class="box-body">
      <table class="table table-hover responsive">
         <tr>
            <td>Nome do Edificio:</td>
            <td>{{ $edificio->nome }}</td>
         </tr>
      </table>
   </div>
   <!-- /.box-body -->
   <div class="box-footer">
      Última atualização em <label class="label label-primary">{{ $edificio->created_at }}</label>
   </div>
   <!-- /.box-footer-->
</div>
@endsection
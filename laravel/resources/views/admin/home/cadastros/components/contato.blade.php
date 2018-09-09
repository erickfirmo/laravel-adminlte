@if(isset($data))
<form>
   <div class="row">
      <div class="col-md-12">
         <h3>Contatos</h3>
      </div>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
        <form id="form-contatos" name="form-contatos" action="{{ route('admin.listadecontatos') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="contatable_type" id="contatable_type" value="{{ get_class($data) }}">
            <input type="hidden" name="contatable_id" id="contatable_id" value="{{ $data->id }}">
        {{ csrf_field() }}
        <div class="col-md-12">
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" />
            <br>
        </div>
   
        <div class="col-md-5">
            <input class="form-control" type="text" name="contato" id="contato" placeholder="Telefone, Email, etc..." />
        </div>
        <div class="col-md-5">
            <input class="form-control" type="text" name="observacoes" id="observacoes" placeholder="Ligar após as 10hs" />
        </div>
        <div class="col-md-2">
            <div class="input-group-btn">
                <input type="button" class="btn btn-xs btn-success pull-right addContato" onClick="addContato(this)" id="{{ $data->id }}" value="Adicionar" name="{{ get_class($data) }}" />
            </div>
        </div>
        </form>
</div>
<div class="row">
   <div class="col-md-12">
      @if(isset($data->contatos))
      <br>
      <div class="table-responsive">
         <table id="tabela" name="tabela" class="table table-bordered table-hover datatables">
            
         </table>
      </div>
      @endif
   </div>
</div>
</form>
@endif
<div class="row">
   <div class="col-md-8 col-md-offset-1">
      @include('admin.partials._alert')
      <div class="box box-{{ $errors->count() ? 'danger' : 'primary' }}">
         <div class="box-header with-border">
            <h3 class="box-title">Dados Gerais</h3>
         </div>
         {{ $slot }}
         <div class="box-body">
            <div class="row">
            <div class="col-md-4">
                  {{ Form::bsText('cnpj', 'Cnpj', null, ['class' => 'cnpj']) }}
               </div>
               <div class="col-md-4">
               </div>
               <div class="col-md-4">
               </div>
               <div class="col-md-12">
                  {{ Form::bsText('nome_fantasia', 'Nome Fantasia') }}
               </div>
               <div class="col-md-8">
                  {{ Form::bsText('razao_social', 'Razão Social') }}
               </div>
               <div class="col-md-4">
                {{ Form::bsText('telefone', 'Telefone') }}
               </div>

               <div class="col-md-12">
                  {{ Form::bsTextarea('observacoes', 'Descreva aqui as observações sobre esse registro!') }}
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary  pull-right">Salvar</button>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <ul class="nav nav-tabs">
                     <li class="active">
                        <a href="#1" data-toggle="tab">Endereço</a>
                     </li>
                     @if(isset($edificio))
                     <li><a href="#2" data-toggle="tab">Contatos</a>
                     </li>
                     <li><a href="#3" data-toggle="tab">Unidades</a>
                     </li>
                     <li><a href="#4" data-toggle="tab">Fotos</a>
                     </li>
                     @php($data = $edificio)
                     @endif
                  </ul>
                  <div class="tab-content ">
                     <div class="tab-pane active" id="1">
                        @include('admin.home.cadastros.components.endereco')
                     </div>
                     {{ Form::close() }}
                     <div class="tab-pane" id="2">
                        <div class="row">
                           <div class="col-md-12">
                              @include('admin.home.cadastros.components.contato')
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="3">
                        <div class="row">
                           <div class="col-md-12">
                              <h3>Unidades</h3>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="4">
                        <div class="row">
                           <div class="col-md-12">
                              <h3>Fotos</h3>
                              @include('admin.home.cadastros.components.fotos')
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
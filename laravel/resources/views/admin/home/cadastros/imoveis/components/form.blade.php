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
                        {{ Form::bsSelect('tipo_de_imovel_id', 'Tipo de Imóvel', $tipos) }}
                    </div>
                    <div class="col-md-8" id="edificios" name="edificios">
                        <label for="edificio_id">Selecione o Edificio</label>
                        <select name="edificio_id" id="edificio_id" class="form-control lista">
                        @foreach($edificios as $edificio)
                        <option value="{{ $edificio->id }}">{{ $edificio->nome_fantasia }}</option>
                        @endforeach
                        </select>
                    </div>


                    <div class="col-md-12">
                        <h4>Opções</h4>
                    </div>

                    <div class="col-md-2">
                        {{ Form::checkbox('imovel_novo') }} Imóvel Novo 
                    </div>
                    <div class="col-md-2">
                        {{ Form::checkbox('lancamento') }} Lançamento
                    </div>
                    <div class="col-md-4">
                        {{ Form::checkbox('web') }} Enviar p/ Web?
                    </div>
                    
                    <div class="col-md-2">
                        {{ Form::checkbox('venda') }} Venda
                    </div>

                    <div class="col-md-2">
                        {{ Form::checkbox('locacao') }} Locação
                    </div>

                    <div class="col-md-12">
                    <br>
                        {{ Form::bsText('descricao', 'Descrição') }}
                    </div>
                    <div class="col-md-12">
                        <h4>Valores e Medidas</h4>
                    </div>
                    <div class="col-md-9">
                    <div class="row">
                    <div class="col-md-4">
                            {{ Form::bsText('valor_venda', 'Valor p/ Venda', null, ['class' => 'money']) }}
                            {{ Form::bsText('valor_locacao', 'Valor p/ Locação', null, ['class' => 'money']) }}
                            {{ Form::bsText('valor_iptu', 'Valor Iptu', null, ['class' => 'money']) }}
                            {{ Form::bsText('valor_condominio', 'Valor Condominio', null, ['class' => 'money']) }}
                        </div>
                    <div class="col-md-4">
                            {{ Form::bsText('area_terreno', 'Area do Terreno', null, ['class' => 'meter']) }}
                            {{ Form::bsText('area_construida', 'Area Construida', null, ['class' => 'meter']) }}
                            {{ Form::bsText('area_util', 'Area util', null, ['class' => 'meter']) }}
                    </div>    
                    </div>

                    </div>

                    
                    <div class="col-md-3">

                    </div>




                </div>

                <div class="row">
                    <div class="col-md-12">

                        <button type="submit" class="btn btn-primary btn-flat pull-right">Salvar</button>




                    </div>
                </div>
                {{ Form::close() }}
                <div class="row">
               <div class="col-md-12">
                  <ul class="nav nav-tabs">
                     <li class="active">
                        <a href="#1" data-toggle="tab">Endereço</a>
                     </li>
                     @if(isset($imovel))
                     <li><a href="#2" data-toggle="tab">Contatos</a>
                     </li>
                     <li><a href="#3" data-toggle="tab">Unidades</a>
                     </li>
                     <li><a href="#4" data-toggle="tab">Fotos</a>
                     </li>
                     
                     @php($data = $imovel)
                     @endif

                     <li id="li-fotos-edificio"></li>
                  </ul>
                  <div class="tab-content">
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
                              <h3>Interessados</h3>
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
                     
                     <div class="tab-pane" id="5">
                        <div class="row">
                           <div class="col-md-12">
                              <h3>Fotos do Edificio</h3>
                                <div class="row">
                                    <div class="listadefotosEdificio">
                                    @if(isset($imovel->edificio->fotos))
                                        @foreach($imovel->edificio->fotos as $fotoedificio)
                                            <div class='col-md-3'>
                                                <a class='thumbnail'>
                                                    <img class='img img-responsive' src='{{ public_path($fotoedificio) }}'>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
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
    </div>
</div>
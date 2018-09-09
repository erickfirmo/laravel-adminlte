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
                    <div class="col-md-12">
                        {{ Form::bsText('nome_fantasia', 'Nome Fantasia') }}
                    </div>
                    <div class="col-md-12">
                        {{ Form::bsText('razao_social', 'Razão Social') }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::bsText('cnpj', 'Cnpj') }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::bsText('ie', 'Inscrição Estadual') }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">Endereço</a>
                            </li>
                            <li><a href="#2" data-toggle="tab">Contatos</a>
                            </li>
                            <li><a href="#3" data-toggle="tab">Observações</a>
                            </li>
                            <li><a href="#4" data-toggle="tab">Imóveis</a>
                            </li>
                        </ul>

                        <div class="tab-content ">
                            <div class="tab-pane active" id="1">
                                @include('admin.home.cadastros.components.endereco')
                            </div>
                            <div class="tab-pane" id="2">
                                @include('admin.home.cadastros.components.contato')
                            </div>
                            
                            <div class="tab-pane" id="3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Observações</h3>
                                    </div>
                                    <div class="col-md-12">
                                        {{ Form::bsTextarea('observacoes', 'Descreva aqui as observações sobre esse registro!') }}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Imóveis</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-flat">Salvar</button>
            </div>

            {{ Form::close() }}

        </div>
    </div>
</div>
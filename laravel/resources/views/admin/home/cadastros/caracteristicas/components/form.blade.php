<div class="row">
    <div class="col-md-6 col-md-offset-3">

        @include('admin.partials._alert')
        
        <div class="box box-{{ $errors->count() ? 'danger' : 'primary' }}">
            <div class="box-header with-border">
                <h3 class="box-title">Preencha o formulário</h3>
            </div>

            {{ $slot }}

            <div class="box-body">
               <div class="row">
                <div class="col-md-12">
                {{ Form::bsText('nome', 'Nome da Caracteristica') }}
                </div>
                <div class="col-md-12">
                        <h4>Esta categoria deve estar disponivel para:</h4>
                </div>
                <div class="col-md-6">
                {{ Form::checkbox('edificio') }}
                        <label for="edificio">Edificios</label>
                </div>
                <div class="col-md-6">
                    {{ Form::checkbox('imovel') }}
                    <label for="imovel">Imóveis</label>
                </div>
               </div>   
                <div class="row">
                    <div class="col-md-12">
                    <h4>Esta categoria deve estar disponivel para:</h4>
                    </div>
                    <div class="col-md-12">
                            @foreach($tiposdeimoveis as $tipodeimovel)
                                {{ Form::checkbox('tipodeimovel_id['.$tipodeimovel->id.'][]', 1, isset($caracteristica->tiposdeimoveis) ? $caracteristica->hasTipodeimovel($tipodeimovel) : null) }} {{ $tipodeimovel->nome }}
                                <br>
                            @endforeach
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

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
                {{ Form::bsText('nome', 'Nome do Tipo de Imóvel') }}
                </div>
                <div class="col-md-12">
                        <h4>Este tipo de imóvel pode usar as seguintes categorias:</h4>
                </div>
               </div>   
                <div class="row">
                    <div class="col-md-12">
                            @foreach($caracteristicas as $caracteristica)

                                {{ Form::checkbox('caracteristica_id['.$caracteristica->id.'][]', 1, isset($tipo) ? $tipo->hasCaracterist($caracteristica) : null) }} {{ $caracteristica->nome }}
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

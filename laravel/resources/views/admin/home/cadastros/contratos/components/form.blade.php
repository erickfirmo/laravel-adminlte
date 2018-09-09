<div class="row">
    <div class="col-md-6 col-md-offset-3">

        @include('admin.partials._alert')
        
        <div class="box box-{{ $errors->count() ? 'danger' : 'primary' }}">
            <div class="box-header with-border">
                <h3 class="box-title">Insira os dados do contrato</h3>
            </div>

            {{ $slot }}

            <div class="box-body">
               <div class="row">
               <div class="col-md-12">
               <label for="inquilino_id">Selecione o Inquilino</label>
                <select name="inquilino_id" id="inquilino_id" class="form-control select2">
                   @foreach($inquilinos as $inquilino)
                   <option value="{{ $inquilino->id }}">{{ $inquilino->nome_fantasia }} Cnpj: {{ $inquilino->cnpj }}</option>
                   @endforeach
                </select>
               </div>
               <div class="col-md-12">
               <label for="imovel_id">Selecione o Imóvel</label>
                <select name="imovel_id" id="imovel_id" class="form-control select2">
                   @foreach($imoveis as $imovel)
                   <option value="{{ $imovel->id }}">{{ $imovel->logradouro }}, {{ $imovel->numero }}</option>
                   @endforeach
                </select>
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

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
               {{ Form::bsText('nome', 'Nome da despesa') }}
               {{ Form::checkbox('destacar') }} 
               <label class="form-check form-check-inline" for="destacar"> Destacar nos recibos?</label>

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

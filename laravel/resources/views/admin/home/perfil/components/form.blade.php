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
               <div class="col-md-6">
               {{ Form::bsText('name', 'Nome') }}
               </div>
               <div class="col-md-6">
               {{ Form::bsText('lastname', 'Sobrenome') }}
               </div>

               <div class="col-md-6">
               {{ Form::bsText('telefone', 'Telefone', null, ['class' => 'phone_with_ddd']) }}
               </div>
               <div class="col-md-6">
               {{ Form::bsText('celular', 'Celular', null, ['class' => 'cellphone_with_ddd']) }}
               </div>


               <div class="col-md-12">
               {{ Form::bsText('email', 'Email') }}
               </div>
               </div>
               <meta name="csrf-token" content="{{ csrf_token() }}" />
               <div class="row">
               <div class="col-md-12">
                <h4>*Troca de senha</h4>
               </div>
               <div class="col-md-4">
                {{ Form::bsPassword('new_password', 'Nova Senha') }}
                </div>
                <div class="col-md-4">
                {{ Form::bsPassword('confirm_password', 'Confirme a Senha') }}
                </div>
                <div class="col-md-4">
                {{ Form::bsPassword('current_password', 'Senha Atual') }}
                </div>
                <div id="response_password" class="col-md-12">
                </div>
                <div id="response_password_tamanho" class="col-md-12">
                </div>
                <div id="response_password_verifica" class="col-md-12">
                </div>
                <div id="response_password_match" class="col-md-12">
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

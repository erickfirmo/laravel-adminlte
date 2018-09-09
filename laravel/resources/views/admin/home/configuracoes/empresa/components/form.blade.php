<div class="row">
    <div class="col-md-10 col-md-offset-1">

        @include('admin.partials._alert')
        
        <div class="box box-{{ $errors->count() ? 'danger' : 'primary' }}">
            <div class="box-header with-border">
                <h3 class="box-title">Preencha o formulário</h3>
            </div>

            {{ $slot }}
            <div class="box-body">
            <div class="col-md-12">
            <input type="file" id="uploadImage" name="uploadImage"/>
            </div>
            <div class='col-md-4'>
            </div> 
            <div class='col-md-4' align='center'>
                <a><img class='img img-thumbnail' src='{{ (isset($empresa->logotipo) ? asset($empresa->logotipo) : '') }}'>
                </a>
            </div>
            <div class='col-md-4'>

            </div>
            <div class="col-md-12">

            </div>
            @if(isset($empresa))
            @php($data = $empresa)
            @endif
            <div class="col-md-4">
            {{ Form::bsText('cnpj', 'CNPJ', null, ['class' => 'cnpj']) }} 
            </div>
            <div class="col-md-4">
                {{ Form::bsText('ie', 'IE') }}
            </div>     
            <div class="col-md-12">
                {{ Form::bsText('razao_social', 'Razão Social') }}
            </div>
            <div class="col-md-12">
                {{ Form::bsText('nome_fantasia') }}
            </div>

            <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                @include('admin.home.cadastros.components.endereco')
                </div>
            </div>
            
            </div>

            <div class="col-md-12">
            <p><b><font color="red">Atenção: </font></b>Este email será utilizado para enviar comunicados aos usuários do {{ env('APP_NAME') }}.</p>
            </div>
            <div class="col-md-8">
        
                {{ Form::bsText('email', 'Email', null, ['placeholder' => 'noreply@suaempresa.com.br'])}}
            </div>
            <div class="col-md-4">
            {{ Form::bsText('telefone', 'Telefone', null, ['class' => 'phone_with_ddd']) }}
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar</button>
            </div>
            {{ Form::close() }}
           </div>
        </div>
    </div>
</div>

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
    <script src="{{ asset('comum/js/masks.js') }}"></script>
    <script src="{{ asset('comum/js/cnpj.js') }}"></script>
    <script src="{{ asset('comum/js/viacep.js') }}"></script>
@endsection
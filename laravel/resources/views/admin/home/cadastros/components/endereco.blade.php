<div class="row">
    <div class="col-md-12">
    <h3>Endereço</h3>
    </div>
    <div class="col-md-3">
    {{ Form::bsText('cep', 'Cep', (isset($data) ? $data->endereco->cep : ''), ['class' => 'cep']) }}
    </div>
    <div class="col-md-5">
    {{ Form::bsText('logradouro', 'Logradouro', (isset($data) ? $data->endereco->logradouro : '')) }}
    </div>

    <div class="col-md-2">
    {{ Form::bsText('numero', 'Numero', (isset($data) ? $data->endereco->numero : '')) }}
    </div>
    <div class="col-md-2">
    {{ Form::bsText('complemento', 'Compl.', (isset($data) ? $data->endereco->complemento : '')) }}
    </div>
</div>
<div class="row">
    <div class="col-md-4">
    {{ Form::bsText('bairro', 'Bairro', (isset($data) ? $data->endereco->bairro : '')) }}
    </div>
    <div class="col-md-4">
    {{ Form::bsText('cidade', 'Cidade', (isset($data) ? $data->endereco->cidade : '')) }}
    </div>
    <div class="col-md-2">
    {{ Form::bsSelect('uf_id', 'Uf', $ufs, (isset($data) ? $data->endereco->uf_id : '')) }}
    </div>
</div>
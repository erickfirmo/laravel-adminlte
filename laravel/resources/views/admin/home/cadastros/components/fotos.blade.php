@if(isset($data))
<style type="text/css">

    .hide-bullets {
        
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
    }
    .thumbnail {
        position: relative;
        padding: 0px;
        margin-bottom: 20px;
    }

    .thumbnail>img {
    width: 100%;
    }
    
    .btn.btn-flat {
        width: 100%;
        position: absolute;
        right: 0;
        bottom: 0;
    }




</style>


<form id="form-fotos" name="form-fotos" action="{{ route('admin.uploaddefotos') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="file" id="uploadFotos" name="uploadFotos[]" multiple/>
<input type="hidden" name="fotable_type" id="fotable_type" value="{{ get_class($data) }}">
<input type="hidden" name="fotable_id" id="fotable_id" value="{{ $data->id }}">
<br >
</form>

      <!-- Bottom switcher of slider -->

<div class="row">


<meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="listadefotos">
                
    </div>

</div>
@endif
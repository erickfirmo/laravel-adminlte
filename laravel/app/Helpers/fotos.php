<?php


function uploaddefotos($data)
{
    echo "<br>";
    echo Form::model($data, ['route' => ['admin.uploaddefotos', $data->id], 'method' => 'POST', 'files' => true, 'id' => 'foto_form', 'name'=> 'foto_form']);
    echo Form::file('uploads[]', ['title' => 'Selecione os arquivos', 'multiple' => true]);
    echo Form::submit('Iniciar Upload');
    echo "<br />";
    echo Form::close();

    echo "<style>
    .hide-bullets {
        
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
    }
    .thumbnail {
    padding: 0;
    }
    .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
    }
 </style>";

    echo "<div class='col-sm-12' id='slider-thumbs'>";
    echo "<ul class='hide-bullets'>";
    $i = 0;
    foreach($data->fotos as $foto)
    {   
        echo "<li class='col-sm-3'>";
        echo Form::open(['route' => ['admin.uploaddefotos.destroy', $foto->id], 'method' => 'DELETE', 'onsubmit' => 'deleteForm(this);return false;', 'style' => 'display: inline-block;']);
        echo "<button type='submit' class='btn btn-danger btn-flat btn-xs'><i class='fa fa-trash'></i></button>";
        echo Form::close();
        echo "<a class='thumbnail' id='carousel-selector-{{ $i }}'><img src='".asset($foto->thumbnail)."'></a>";
        echo "</li>";
    }
        echo "</ul>";
        echo "</div>";

}


?>
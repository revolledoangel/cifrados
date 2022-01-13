<?php

$artista=[];
$album=[];

foreach($artistas as $key => $value){
    if($_GET["pagina"]==$value["ruta_artista"]){
        $artista=$value;
    }
}


$albumes= ControllerGeneral::ctrGetAlbumes($artista["id_artista"]);


include "modules/breadcrumbs-artista.php";
include "modules/perfil-artista.php";
include "modules/lista-albumes.php";
include "modules/lista-colaboradores.php";
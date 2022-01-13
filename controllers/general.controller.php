<?php
Class ControllerGeneral{

    /* Mostrar contenido de la tabla General */

    static public function ctrGetGeneral(){

        $tabla = "general";
        $respuesta= ModelGeneral::mdlGetGeneral($tabla);
        return $respuesta;

    }

    /* Mostrar contenido de la tabla Artista */

    static public function ctrGetArtistas(){

        $tabla = "artista";
        $respuesta= ModelGeneral::mdlGetArtistas($tabla);
        return $respuesta;

    }

    /* Mostrar contenido de la tabla Albumes */

    static public function ctrGetAlbumes($id_artista){

        $tabla = "album";
        $respuesta= ModelGeneral::mdlGetAlbumes($tabla,$id_artista);
        return $respuesta;

    }

    /* Mostrar contenido de la tabla Album_artista */

    static public function ctrGetArtistaAlbum(){

        $tabla = "artista_album";
        $respuesta= ModelGeneral::mdlGetArtistaAlbum($tabla);
        return $respuesta;

    }

}
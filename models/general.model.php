<?php

require_once "conexion.php";

class ModelGeneral{

    /* Mostrar Contenido de la tabla General */

    static public function mdlGetGeneral($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();
        $stmt = null;
    }

    /* Mostrar Contenido de la tabla Artistas */

    static public function mdlGetArtistas($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY nombre_artista ASC");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }

    /* Mostrar Contenido de la tabla Albumes */

    static public function mdlGetAlbumes($tabla,$id_artista){

        $stmt = Conexion::conectar()->prepare(" SELECT * FROM $tabla INNER JOIN 
                        (SELECT id_album FROM artista_album WHERE artista_album.id_artista = $id_artista) as result 
                        ON $tabla.id_album=result.id_album ORDER BY lanzamiento desc");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }
    
}

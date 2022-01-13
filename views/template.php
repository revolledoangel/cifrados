<?php
$general= ControllerGeneral::ctrGetGeneral();
$artistas= ControllerGeneral::ctrGetArtistas();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php

    $validarRuta="";

    if (isset($_GET["pagina"])){
        foreach ($artistas as $key => $value){
            if($_GET["pagina"]== $value["ruta_artista"]){

                $validarRuta="artistas";
                break;

            }
        }
        if ($validarRuta=="artistas"){
            echo '<title> '.$value["nombre_artista"]. ' - '. $general["titulo"].'</title>
            <meta name="title" content="'. $value["nombre_artista"].'>">
            <meta name="description" content="'.$value["biografia_artista"].'">';

            $palabras_claves=json_decode( $general["palabras_claves"],true);
            $p_claves="";
            foreach ( $palabras_claves as $key => $value){
                $p_claves.= $value.", ";
            }
            $p_claves = substr($p_claves,0,-2);

            echo '<meta neme="keywords" content="'.$p_claves.'">';
        }else{

            echo '<title> '.$general["titulo"].'</title>
            <meta name="title" content="'.$general["titulo"].'>">
            <meta name="description" content="'.$general["descripcion"].'">';

            $palabras_claves=json_decode( $general["palabras_claves"],true);
            $p_claves="";
            foreach ( $palabras_claves as $key => $value){
                $p_claves.= $value.", ";
            }
            $p_claves = substr($p_claves,0,-2);

            echo '<meta neme="keywords" content="'.$p_claves.'">';

        }
    }else{

        echo '<title> '.$general["titulo"].'</title>
            <meta name="title" content="'.$general["titulo"]. '>">
            <meta name="description" content="'.$general["descripcion"].'">';

            $palabras_claves=json_decode( $general["palabras_claves"],true);
            $p_claves="";
            foreach ( $palabras_claves as $key => $value){
                $p_claves.= $value.", ";
            }
            $p_claves = substr($p_claves,0,-2);

            echo '<meta neme="keywords" content="'.$p_claves.'">';
    }
    
    ?>

    <link rel="shortcut icon" href="views/assets/imgs/favicon.png"/>

    <!--Enlaces propios de la plantilla-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/style-main.css">
    <link rel="stylesheet" href="views/css/style-artista.css">

    <!--Enlaces del proyecto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body>

<?php
    /* Modulo Menú */
    include "pages/modules/header.php";
?>

    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left vh-100">

        <?php
        /* Modulo Lista de Artistas */
        include "pages/modules/lista-artistas.php";
        ?>

            <main class="col main h-100 overflow-auto mb-3">

            <?php

            /* Navegación Entre páginas */
            $validarRuta="";

            if(isset($_GET["pagina"])){
                
                foreach($artistas as $key => $value){

                    if($_GET["pagina"]==$value["ruta_artista"]){

                        $validarRuta="artistas";

                    }
                }
                /* Validar Rutas */

                if ($validarRuta=="artistas"){
                    include "pages/artista.php";
                }else{
                    include "pages/404.php";
                }


            }else{

                include "pages/home.php";

            }

            


            /* Footer */
            include "pages/modules/footer.php";
            ?>

            </main>
            <!--/main col-->

        </div>

    </div>

    <?php
    /* Modulo Modal */
    include "pages/modules/modal.php";
    ?>
    
</body>
<script src="views/js/js.js"></script>

</html>
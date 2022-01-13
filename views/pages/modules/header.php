<!-- Menú -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark mb-3">
        <div class="flex-row d-flex">
            <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas"
                title="Toggle responsive left sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $general["dominio"];?>" title="cifradoscristianos.com">Cifrados Cristianos</a>
        </div>
        <button class="navbar-toggler redes" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="collapsingNavbar">
            <ul class="navbar-nav ml-auto">

                <?php 
    
                $redesSociales=json_decode( $general["redes_sociales"],true);
                foreach ( $redesSociales as $key => $value){
                    echo    '<li class="nav-item">
                            <a href="'.$value["url"].'" target="_blank" class="nav-link">
                                <i  class="'.$value["icono"].'"></i></a>
                            </li>';
                }
            
                ?>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Fin Menú -->
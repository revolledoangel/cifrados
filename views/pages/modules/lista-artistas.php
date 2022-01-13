<!-- Lista de Artistas -->
<div class="col-md-3 col-lg-2 sidebar-offcanvas h-100 overflow-auto pl-0 widget" id="sidebar"
                role="navigation">
                <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">

                    <?php foreach ($artistas as $key => $value): ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $value["ruta_artista"]; ?>">
                                <?php echo $value["nombre_artista"]; ?>
                            </a>
                        </li>

                    <?php endforeach ?>

                </ul>
            </div>
            <!--/ Fin lista de artistas-->
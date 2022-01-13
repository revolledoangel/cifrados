<!-- Modulo lista de albumes -->
<h2 class="entrada">
    Álbumes
</h2>
<div class="row m-3 text-center justify-content-center">
    <a class="button-todo col-auto">Ver todas las canciones de <?php echo $artista["nombre_artista"] ?></a>        
</div>

<section class="cards">
    <?php foreach ($albumes as $key => $value): ?>

        <a class="card" href="<?php echo $value["ruta_album"]; ?>">
            <img class="card__image" src="<?php echo $value["foto_album"]; ?>" alt="">
            <div class="card__content">
                <h4><?php echo $value["nombre_album"]; ?></h4>
            </div>
        </a>

    <?php endforeach ?>


</section>
<!-- Fin Modulo lista de albumes -->

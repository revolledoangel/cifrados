<!-- Modulo perfil Artista -->
<section class="profile">
    <div class="row profile-content">
        <div class="col-9 col-sm-8 col-md-6 profile-description">
            <h4><?php echo $artista["nombre_artista"] ?></h4>
            <p><?php echo $artista["biografia_artista"] ?></p>
        </div>
        <div class="col-3 col-sm-4 col-md-6"><img src="<?php echo $artista["foto_artista"] ?>"
                class="float-right img-responsive img-rounded"></div>
    </div>
    <hr>                   
    <div class="spacer5"></div>
</section>
<!-- Modulo perfil Artista -->
<div class="eventos swiper-slide">
        <p class="eventos__hora"><?php echo $evento->hora->hora; ?></p>

        <div class="eventos__informacion">
            <h4 class="eventos__nombre"><?php echo $evento->nombre; ?></h4>

            <p class="eventos__introduccion"><?php echo $evento->descripcion; ?></p>

            <div class="eventos__autor-info">
                <picture>
                    <source srcset="/img/speakers/<?php echo $evento->ponente->imagen; ?>.webp" type="image/webp">
                    <source srcset="/img/speakers/<?php echo $evento->ponente->imagen; ?>.png" type="image/png">
                    <img class="eventos__imagen-autor" loading="lazy" width="200" height="300" src="/img/speakers/<?php echo $evento->ponente->imagen; ?>.png" alt="Imagen Ponente">
                </picture>
                <p class="eventos__autor-nombre">
                    <?php echo $evento->ponente->nombre . ' ' . $evento->ponente->apellido ; ?>
                </p>
            </div>
        </div>
    </div>
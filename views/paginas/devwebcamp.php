<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?>  </h2>

    <p class="devwebcamp__descripcion">Conoce la conferenica más importante de Latinoamérica</p>

    <div <?php aos_animacion();?> class="devwebcamp__grid">
        <div class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>
        <div <?php aos_animacion();?> class="devwebcamp__contenido">
            <p <?php aos_animacion();?> class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga cumque sed optio. Itaque repellendus culpa voluptate quos cumque modi error id eligendi! Sit illo sequi, eius quos culpa accusantium architecto!</p>
            <p <?php aos_animacion();?> class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga cumque sed optio. Itaque repellendus culpa voluptate quos cumque modi error id eligendi! Sit illo sequi, eius quos culpa accusantium architecto!</p>
        </div>
    </div>
</main>
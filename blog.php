<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <div class="blog">
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="imagen de la entrada de blog 1">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito el: <span>14/4/2021</span> por: <span>Admin</span></p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa
                        </p>
                    </a>
                </div>

            </article> <!--entrada de blog-->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="imagen de la entrada de blog 2">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p>Escrito el: <span>14/4/2021</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio de tu hogar con esta guida, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>

            </article> <!--entrada de blog-->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog3.webp" type="image/webp">
                        <source srcset="build/img/blog3.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog3.jpg" alt="imagen de la entrada de blog 3">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p>Escrito el: <span>14/4/2021</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio de tu hogar con esta guida, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>

            </article> <!--entrada de blog-->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog4.webp" type="image/webp">
                        <source srcset="build/img/blog4.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog4.jpg" alt="imagen de la entrada de blog 4">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p>Escrito el: <span>14/4/2021</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio de tu hogar con esta guida, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>

            </article> <!--entrada de blog-->

        </div>
    </main>

    <?php incluirTemplate('footer') ?>
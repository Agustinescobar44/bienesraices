<?php 
    require './includes/app.php';
    incluirTemplate('header' , true);


?>


    <main class="contenedor seccion index-iconos">
        <h1>Más sobre nosotros</h1>
        <div class="iconos contenedor">
            
            <div class="iconos-contenido">
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="candado" loading="lazy">
                    <h2>SEGURIDAD</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim deleniti sed facilis eos dolores. Placeat ullam voluptas aliquid perferendis quod illo ad magnam maiores eaque. Placeat, dolores omnis. Commodi, facere!</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="dinero" loading="lazy">
                    <h2>PRECIO</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim deleniti sed facilis eos dolores. Placeat ullam voluptas aliquid perferendis quod illo ad magnam maiores eaque. Placeat, dolores omnis. Commodi, facere!</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="reloj" loading="lazy">
                    <h2>A TIEMPO</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim deleniti sed facilis eos dolores. Placeat ullam voluptas aliquid perferendis quod illo ad magnam maiores eaque. Placeat, dolores omnis. Commodi, facere!</p>
                </div>
            </div>

        </div>
    </main>


    <section class="seccion contenedor los-anuncios">
        <h2>Casas y depas en Venta</h2>

        <?php
            $limite = 3;
           include 'includes/templates/anuncios.php' 
         ?>

        
        <div class="ver-todas alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Propiedades</a>
        </div>
    </section>

    <section class="seccion imagen-contacto">
        <div class="contenedor imagen-contacto-contenido">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum id nobis quos enim, tempora ducimus expedita facilis corporis repellendus molestias officia suscipit inventore ut, veritatis at quibusdam omnis nihil dignissimos.</p>
            <a href="contacto.php" class="boton-amarillo-inline-block">Contactanos</a>
        </div>
    </section>

    <div class="contenedor seccion seccion-inferior index-blog">
        <section class="blog">
            <h3>Nuestro Blog</h3>

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
                        <p class="informacion-meta">Escrito el: <span>14/4/2021</span> por: <span>Admin</span></p>

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
                        <p class="informacion-meta">Escrito el: <span>14/4/2021</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio de tu hogar con esta guida, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>

            </article> <!--entrada de blog-->

        </section>

        <section class="testimoniales">
                <h3>Testimoniales</h3>

                <div class="testimonial">
                    <blockquote>
                        El personal se comportó de una exelente forma, muy buena atención y la casa que me ofrecieron cumplieron todas mis expectativas.
                    </blockquote>
                    <p>--Agustinesco</p>
                </div>
        </section>


    </div>
    <?php incluirTemplate('footer') ?>

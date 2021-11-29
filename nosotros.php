<?php 
    require './includes/app.php';
    incluirTemplate('header' );
?>
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenedor seccion descripcion-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="imagen despacho">
                </picture>
            </div>
            <div class="nosotros-texto">
                <blockquote>25 años de expreciencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto facere ut culpa expedita ullam iste nisi in! Earum consequatur doloribus repudiandae, explicabo dolor nam! Neque quod voluptatum atque dicta! Debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde, ipsa quia perspiciatis earum quam laboriosam accusamus expedita officiis quae repellat debitis error eum sapiente saepe obcaecati eius, fuga itaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ab cupiditate praesentium sequi! Nulla ipsum optio eos cumque, aut repudiandae ad nemo maxime inventore in illo nam? Recusandae, repellendus accusamus? <br>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam magni tempore dignissimos iusto tempora exercitationem eius maxime nam, porro fugit error consequatur facilis recusandae, optio iste, id quia eveniet? Tenetur!
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>


    <?php incluirTemplate('footer') ?>
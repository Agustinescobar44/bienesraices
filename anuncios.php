<?php 
    require 'includes/app.php';
    incluirTemplate('header' );
?>
    <main class="contenedor seccion">
        <h1>Casas y depas en Venta</h1>

        <?php
            $limite = 30;
           include 'includes/templates/anuncios.php' 
         ?>
    </main>

    <?php incluirTemplate('footer') ?>
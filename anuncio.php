<?php 
    require 'includes/app.php';
    incluirTemplate('header' );

    //Importar base de datos
    $db = conectarDB();

    //conseguir id del get
    $id = $_GET['id'];

    // Consulta
    $query = "SELECT * FROM propiedades WHERE id = ${id}";

    // Resultados
    $resultado = mysqli_query($db , $query) ;

    // Pasar datos a un array
    $propiedad = mysqli_fetch_assoc($resultado);

?>
    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo'] ?></h1>


        <img src="imagenes/<?php echo $propiedad['imagen'] ?>" alt="imagen de la propiedad">

        <div class="resumen-propiedad">
            <p class="precio"><?php echo $propiedad['precio'] ?></p>

            <ul class="iconos iconos-anuncio">
                <li>
                    <img src="build/img/icono_wc.svg" alt="inodoro" loading="lazy"> 
                    <p><?php echo $propiedad['wc'] ?></p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="coche" loading="lazy"> 
                    <p><?php echo $propiedad['estacionamiento'] ?></p>
                </li>
                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="cama" loading="lazy">
                    <p><?php echo $propiedad['habitaciones'] ?></p> 
                </li>
            </ul>
    
            <p class="texto"><?php echo $propiedad['descripcion'] ?>
            </p>


        </div>


    </main>

    <?php incluirTemplate('footer') ?>
<?php 
    // Importar db
    $db = conectarDB(); 

    //Consultar
    $query = "SELECT * FROM propiedades LIMIT ${limite}";

    // Obetener resultados
    $resultado = mysqli_query($db , $query);

?>


<div class="contenedor-anuncios">
    <?php while( $propiedad = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">
                <img class ="anuncio-imagen" loading="lazy" src="../../imagenes/<?php echo $propiedad['imagen'] ?>" alt="img anuncio">
                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad['titulo']; ?></h3>
                    <p><?php echo $propiedad['descripcion']; ?></p>
                    <p class="precio">$ <?php echo $propiedad['precio']; ?></p>

                    <ul class="iconos">
                        <li>
                            <img class="icono-anuncios" src="build/img/icono_wc.svg" alt="inodoro" loading="lazy"> 
                            <p><?php echo $propiedad['wc']; ?></p>
                        </li>
                        <li>
                            <img class="icono-anuncios" src="build/img/icono_estacionamiento.svg" alt="coche" loading="lazy"> 
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                        </li>
                        <li>
                            <img class="icono-anuncios" src="build/img/icono_dormitorio.svg" alt="cama" loading="lazy">
                            <p><?php echo $propiedad['habitaciones']; ?></p> 
                        </li>
                    </ul>
                    <a href="anuncio.php?id=<?php echo $propiedad['id'] ?>" class="boton boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div><!--Contenido anuncio-->
            </div><!--Anuncio-->
    <?php endwhile; ?>
</div> <!--Contenedor de anuncios-->
<?php 
    //cerrar conexion
    mysqli_close($db);
?>
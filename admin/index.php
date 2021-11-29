<?php 
    require '../includes/funciones.php';
    incluirTemplate('header' );

    if(!estaAtutenticado()) header('Location: /') ;

    //importar la conexion 
    require '../includes/config/database.php';
    $db = conectarDB();


    // Escribir el Query 
    $query = "SELECT * FROM propiedades";

    //consultar la DB
    $resultado = mysqli_query($db , $query);

    // mostrar mensaje condicional
    $mensaje = intval($_GET['mensaje'] ??null);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id,FILTER_VALIDATE_INT);
        
        if($id){
            $carpetaImagenes = "../imagenes/";

            //Eliminar la imagen 
            $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
            $resultado = mysqli_query($db , $query);
            $imagenEliminar = mysqli_fetch_assoc($resultado);

            unlink($carpetaImagenes . $imagenEliminar['imagen']);
            

            //Elimina la propiedad
            $query = "DELETE FROM propiedades WHERE id= ${id}";

            $resultado = mysqli_query($db , $query);

            if($resultado){
                header('Location: /admin?mensaje=3');
            }
        }


    }


?>
    <main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>



        
        <?php if($mensaje ===1):?>
            <p class="alerta exito">Anuncio creado correctamente!!!!!!!!!!!</p>
        <?php elseif($mensaje ===2):?>
            <p class="alerta exito">Anuncio ACTUALIZADO correctamente!!!!!!!!!!!</p>
        <?php elseif($mensaje ===3):?>
            <p class="alerta error">Anuncio eliminado</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Crear nueva propiedad</a>

        <a href="../index.php" class="boton boton-verde">volver a inicio</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>titulo</th>
                    <th>imagen</th>
                    <th>precio</th>
                    <th>acciones</th>
                </tr>
            </thead>

            <tbody> 

                <!-- mostrar resultados -->
                <?php while( $propiedad = mysqli_fetch_assoc($resultado)): // fetch assoc va a ir pasandole cada row de "resultado" a propiedades hasta quedarse sin     ?>
                <tr>
                    <td> <?php echo $propiedad['id'] ?> </td>
                    <td> <?php echo $propiedad['titulo'] ?> </td>
                    <td><img class="imagen-tabla" src=<?php echo "../imagenes/".$propiedad['imagen'] ?> alt="imagen tabla"></td>
                    <td>$ <?php echo $propiedad['precio'] ?></td>
                    <td>
                    <a href="propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">actualizar</a>
                    <form method="POST" class="w100">

                        <input type="hidden" name="id" value="<?php echo $propiedad['id']?>">
                        <input class="boton-rojo-block w100" type="submit" value="Eliminar">
                    </form>
                   
                    </td>         
                </tr>
                <?php endwhile; ?>
            
            </tbody>



        
        </table>


    </main>

    <?php 
        //cerrar la conexion 
            
    incluirTemplate('footer') ?>
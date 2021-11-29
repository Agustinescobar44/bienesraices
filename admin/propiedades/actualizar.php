<?php 

    require '../../includes/funciones.php';
    incluirTemplate('header' );

    if(!estaAtutenticado()) header('Location: /') ;

    $id = $_GET['id'];
    $id = filter_var($id , FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /admin');
    }
  

    // Base de datos 
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Arreglo con mensaje de errores
    $errores = [];


    //ejemplo de saneamiento de variables. MUY IMPORTANTE PARA PROTEGER LA PAGINA DE POSIBLES ATAQUES   
    $numero = "1puto";
    $resultado = filter_var($numero, FILTER_SANITIZE_NUMBER_INT); // Este codigo solo deja el 1 de la variable numero
    //hay varios FILTER_SANITIZE para diferentes cosas como correos

    //tambien se puede validar que el dato de la varibale sea el tipo de dato esperado con
    $resultado = filter_var($numero, FILTER_VALIDATE_INT); //En caso de no ser de tipo int daria false 

    // Datos de la propiedad
    $consulta = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado2 = mysqli_query($db , $consulta);
    $propiedad =  mysqli_fetch_assoc($resultado2);

    //prellenado
    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $baños = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedor = $propiedad['vendedorId'];
    $imagenPropiedad = $propiedad['imagen'];



    //consultar los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado2 = mysqli_query($db , $consulta);

    // Ejecutar el codigo de lo que el usuario envia en el formulario
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //   echo "<Pre>";
        //   var_dump($_POST);   
        //   //post es la variable global que almacena datos especificos
        //   echo "</Pre>";

        //   exit;

        //   echo "<pre>";
        //   var_dump($_FILES); //los arvhicos no se guardan nunca en post sino en files
        //   echo "</pre>";


        // mysqli_real_escape_string es una funcion que elimina cualquier caracter con la funcion de iteractuar con la base de dato
        $titulo = mysqli_real_escape_string( $db, $_POST['titulo']);
        $precio = mysqli_real_escape_string( $db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones']);
        $baños = mysqli_real_escape_string( $db, $_POST['baños']);
        $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento']);
        $vendedor = mysqli_real_escape_string( $db, $_POST['vendedor']);
        $creado = date('Y/m/d');


        //asignar files a una variable
        $imagen = $_FILES['imagen'];

        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }
        if(!$precio){
            $errores[] = "El precio es obligatorio";
        }
        // if(strlen($descripcion) <50){
        //     $errores[] = "Detalla mas la propiedad";
        // }
        if(!$habitaciones){
            $errores[] = "Tiene que haber habitaciones";
        }
        if(!$baños){
            $errores[] = "Cuantos baños?";
        }
        if(!$estacionamiento){
            $errores[] = "Cantidad de estacionamiento?";
        }
        if(!$vendedor){
            $errores[]= "seleccione un vendedor";
        }

        //validar por tamaño
        $medida = 1000*1000;
        //php soporta solo 2mb a menos que..
        if($imagen['size'] > $medida){
            $errores[] = "La imagen es muy grande ";
        }

        //revisar que no haya errores
        if(empty($errores)){
            // Crear carpeta
            $carpetaImagenes = "../../imagenes/";

            if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
            }

            $nombreImagen = '';

            /** SUBIDA DE ARVCHIVOS */
                if($imagen['name']){
                    //eliminar la imagen previa
                    unlink($carpetaImagenes . $propiedad['imagen']);

                    // Generar un nombre unico
                    $nombreImagen = md5(uniqid( rand() , true)). ".jpg";

                    // Subir la imagen
                    move_uploaded_file($imagen['tmp_name'],$carpetaImagenes . $nombreImagen );
                }else{
                        $nombreImagen = $propiedad['imagen'];
                }

            

            

            //insertar en la base de datos
            $query = " UPDATE propiedades SET 
            titulo = '${titulo}' , 
            precio = ${precio} , 
            imagen = '${nombreImagen}' , 
            descripcion = '${descripcion}' , 
            habitaciones = ${habitaciones} , 
            wc = ${baños} , 
            estacionamiento = ${estacionamiento}, 
            vendedorId = ${vendedor} 
            WHERE id=${id}  
            ; ";
            // echo $query;

            $resultado = mysqli_query($db , $query);
             var_dump($resultado);
            if($resultado){
               header('Location: /admin?mensaje=2');
            }
        }
    }
    //existe otra variable global que almacena todos los datos de la conexion como el SO , el puerto, el navegador

    require '../../includes/funciones.php';
    incluirTemplate('header' );
    
?>
    <main class="contenedor seccion">
        <h1>Actualizar propiedad</h1>
        <a href="/admin" class="boton boton-verde">volver</a>

        <?php foreach ($errores as $error) {?>
            <div class="alerta error">
              <?php echo $error; ?>
            </div>
            
        <?php } ?>
                                              <!-- esto habilita la subida de arvichos -->
        <form class="formulario" method="POST" enctype="multipart/form-data">
        <!--  method decide como y a donde se envia la informacion del formulario
                puede tomar "GET" almacena los datos en la url , exponiendo los datos , se usa para las tiendas virtuales para compartir informacion generalmente
                y "POST"  se usa para inicios de sesion y datos privados , se va a usar la mayoria de las veces
                en post se guardan los datos relacionandolos con la propiedad "name"
        
           -->
            <fieldset>
                <legend>Información general</legend>

                <label for="titulo"> titulo </label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo personalizado" value="<?php echo $titulo; ?>"> 

                <label for="precio"> precio </label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la propieadad" value="<?php echo $precio; ?>"> 

                <label for="Imagen"> Imagen </label>
                <input type="file" id="Imagen" name="imagen" accept="image/jpeg , image/png" name="imagen">  
                <img class="imagen-miniatura" src="/imagenes/<?php echo $imagenPropiedad ?>" alt="imagen de la propiedad">


                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion" ><?php echo $descripcion; ?></textarea>

            </fieldset>
        

            <fieldset>
                <legend>Información propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Cantidad de habiaciones" min="1" max="9" value="<?php echo $habitaciones; ?>"> 

                <label for="baños">baños</label>
                <input type="number" id="baños" name="baños" placeholder="Cantidad de baños" min="1" max="9" value="<?php echo $baños; ?>"> 

                <label for="estacionamiento">estacionamiento</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Cantidad de estacionamiento" min="1" max="9" value="<?php echo $estacionamiento; ?>"> 

            
            </fieldset>


            <fieldset>
                <legend>Vendedor</legend>
            
                <select name="vendedor" value="<?php echo $vendedor; ?>"> 
                    <option value="">--Selecciones un vendedor--</option>

                    <?php while($row = mysqli_fetch_assoc($resultado2)): ?>
                            <option  <?php echo $vendedor === $row['id'] ? 'selected' : ''; ?>  value="<?php echo $row['id'];?>"> <?php echo $row['nombnre'] . " " . $row['apellido'] ?></option>
                    <?php endwhile; ?>
                
                </select>


            </fieldset>

            <input type="submit" value="Actualizar la propiedad" class="boton boton-verde">

        
        </form>

    </main>

    <?php incluirTemplate('footer') ?>
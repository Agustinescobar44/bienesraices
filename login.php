<?php 
    require 'includes/app.php';
    $db = conectarDB();

    $errores = [];

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email = mysqli_real_escape_string($db,filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL));
        $contraseña = mysqli_real_escape_string($db, $_POST['contraseña']);

        if(!$email)$errores[] = 'el email es obligatorio o no es valido';
        if(!$contraseña) $errores[] = 'la contraseña es obligatoria';

        if(empty($errores)){

            // revisar si existe el usuario
            $query = "SELECT * FROM usuarios WHERE email='${email}' ";
            $resultado = mysqli_query($db, $query);
            
            

            if( $resultado -> num_rows){
                    // Revisar si el password es correcto
                    $usuario = mysqli_fetch_assoc($resultado);
                    
                    //Verficiar password
                    $auth = password_verify($contraseña , $usuario['password']);

                    if($auth) {
                        // usuario autenticado
                        session_start();

                        // Llenar el arreglo de la sesion
                        $_SESSION['usuario'] = $usuario['email'];
                        $_SESSION['login'] = true;


                        if($usuario['email'] === 'correo@correo.com') $_SESSION['admin'] = true;
                        else $_SESSION['admin'] = false;
                        
                        header('Location: /admin');

                    }
                    else $errores[] = 'contraceña incorrecta';

            }else $errores[] = "El resultado no existe"; 

        }
    }


    //incluye el header
    incluirTemplate('header' );
?>
    <main class="contenedor seccion">
        <h1>Iniciar sesión</h1>

        <?php  foreach($errores as $error):  ?>

            <div class="alerta error">
                <?php echo  $error;?>
            </div>

        <?php  endforeach;  ?>

        <form class="formulario" method="POST">
        <fieldset>
                <legend>Email y Password</legend>
                <label for="email">Correo electronico</label>
                <input type="email" name="correo" id="email" placeholder="Correo electronico" require>

                <label for="Password">Contraseña</label>
                <input type="password" name="contraseña" id="Password" placeholder="Tu contraseña" require>

                <input type="submit" value="Iniciar Sesión" class="boton boton-verde">

            </fieldset>
        </form>
    </main>

    <?php incluirTemplate('footer') ?>
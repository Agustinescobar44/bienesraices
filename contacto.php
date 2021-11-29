
<?php 
    require 'includes/app.php';
    incluirTemplate('header' );
?>


    <main class="contenedor seccion">
        <h1>Contacto</h1>


        <picture>
            <source srcset='build/img/destacada3.webp' type='image/webp'>
            <source srcset='build/img/destacada3.jpg' type='image/jpeg'>
            <img loading='lazy' src='build/img/destacada3.jpg' alt='imagen de contacto'>
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form class="formulario" >

            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">nombre</label>
                <input type="text"  id="nombre" placeholder="Tú nombre">

                <label for="email">Correo electronico</label>
                <input type="email"  id="email" placeholder="Correo electronico">

                <label for="telefono">Teléfono</label>
                <input type="tel"  id="telefono" placeholder="Número de telefono">

                <label for="mensaje">Mensaje</label>
                <textarea  id="mensaje" ></textarea>

            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="vende-o-compra">Vende o compra: </label>
                <select  id="vende-o-compra">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>
                <label for="presupuesto">Tu precio o presupuesto</label>
                <input type="number"  id="presupuesto" placeholder="Precio o Presupuesto">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <label for="">Como desea ser contactado</label>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" name="contacto" id="contactar-telefono">

                    <label for="contactar-email">Email</label>
                    <input type="radio" name="contacto" id="contactar-email"> <!--se asocian por el name y el type radio solo permite una de las opciones-->
                </div>

                <p>si eligio telefono eliga la fecha y la hora para ser contactado</p>

                <label for="fecha">Fecha:</label>
                <input type="date"  id="fechadate">

                <label for="hora">Hora:</label>
                <input type="time"  id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="enviar" class="boton-verde">
        </form>



    </main>


    <?php incluirTemplate('footer') ?>
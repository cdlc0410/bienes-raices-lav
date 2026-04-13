<?php 

    require '../includes/app.php';
    require FUNCIONES_URL;

    $opt = [ 'pagina' => 'contacto' ];

    incluir_template( 'header' , $opt );
?>

    <main class="container seccion contenido-centrado">
        <h1>Contacto</h1>

        <picture>
            <source srcset="/build/img/destacada3.webp" type="image/webp">
            <source srcset="/build/img/destacada3.jpg" type="image/jpeg">
            <img src="/build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>
        
        <div>
            <h2>Llene el Formulario de Contacto</h2>

            <form action="" class="formulario">

                <fieldset>

                    <legend>Información Personal</legend>

                    <div class="nombres">
                        <div>
                            <label for="nombre">nombre:</label>
                            <input type="text" id="nombre" placeholder="Tu Nombre">

                        </div>
                        <div>
                            <label for="apellido">apellido:</label>
                            <input type="text" id="apellido" placeholder="Tu Apellido">

                        </div>
                    </div>

                    <label for="email">email:</label>
                    <input type="email" id="email" placeholder="Tu Email">

                    <div class="areas">
                        <div>
                            <label for="areas">Pais:</label>
                            <select name="areas" id="areas">
                                <option value="" disabled >-- Seleccionar --</option>
                                <option value="54">Argentina (+54)</option>
                                <option value="55">Brasil (+55)</option>
                                <option value="56">Chile (+56)</option>
                                <option value="57">Colombia (+57)</option>
                                <option value="1">Estados Unidos (+1)</option>
                                <option value="58" selected >Venezuela (+58)</option>
                            </select>
                        </div>
                        <div>
                            <label for="telefono">telefono:</label>
                            <input type="tel" id="telefono" placeholder="Tu Telefono">

                        </div>
                    </div>

                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje"></textarea>

                </fieldset>

                <fieldset>

                    <legend>Información Sobre la propiedad</legend>


                    <label for="opciones">VENDER O COMPRAR:</label>
                    <select name="opciones" id="opciones">
                        <option value="" selected disabled >-- Seleccionar --</option>
                        <option value="compra">Comprar</option>
                        <option value="compra">Vender</option>
                    </select>

                    <label for="presupuesto">Precio o Presupuesto:</label>
                    <input type="number" id="presupuesto" placeholder="Precio o Presupuesto" min="0">


                </fieldset>

                <fieldset>

                    <legend>Formas de Contacto</legend>

                    <p>Como desea ser contactado:</p>
                    <div class="contactos">
                        <label for="contactar-telefono">llamada</label>
                        <input type="radio" name="contactar" id="contactar-telefono" value="telefono">
                        <label for="contactar-email">Email</label>
                        <input type="radio" name="contactar" id="contactar-email" value="email">
                        <label for="contactar-whatsapp">whatsapp</label>
                        <input type="radio" name="contactar" id="contactar-whatsapp" value="whatsapp">

                    </div>
                
                    <p>Si eligió teléfono, elija la fecha y la hora:</p>
                    <label for="fecha">fecha:</label>
                    <input type="date" id="fecha">

                    <label for="hora">hora:</label>
                    <input type="time" id="hora">


                </fieldset>

                <input type="submit" class="boton--verde text-uppercase" value="Enviar">
            </form>

        </div>

    </main>

<?php

    incluir_template( 'footer' , $opt );
?>
<?php 

    require '../includes/app.php';
    require FUNCIONES_URL;

    $opt = [ 'pagina' => 'anuncios' ];

    incluir_template( 'header' , $opt );
?>

    <main class="container seccion">
        <h1>Casas y Departamentos</h1>
        <div class="propiedades">
            <div class="propiedades__cards">
                <?php 
                    crear_varios_anuncios(obtener_json(),  [
                        'disponibles' => false,
                        'limitado' => false
                    ]);
                ?>
            </div> <!--.propiedades__cards-->
        </div> <!--.propiedades-->
    </main>

<?php

    incluir_template( 'footer' , $opt );
?>
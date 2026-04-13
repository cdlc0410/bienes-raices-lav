<?php 

    require '../includes/app.php';
    require FUNCIONES_URL;

    incluir_template('header');
?>

    <main class="container seccion">
        <h1>Titulo Pagina</h1>
    </main>

<?php

    incluir_template( 'footer' , $opt );
?>